class ResourcesController < ApplicationController
	before_filter :load_identity


	#GET    /resources/:id
	def show
		@resource = Resource.find(params[:id])
		idUser = session[:user_id]     	
		@identity =  Identity.find(idUser) 

	end

	# GET /identities/:identity_id/resources
	def index
		
		@resources = @identity.resources
	end

	#GET /identities/:identity_id/resources/new(.:format)	
	def new
		
		@resource = @identity.resources.new

	end

	# POST /identities/:identity_id/resources(.:format)
	def create
		
		@resource = @identity.resources.create(params[:resource])
		
		if @resource.save
	        redirect_to identity_resources_path(@identity) , notice: 'Recurso creado correctamente'
      	else
	        render action: "new" , notice: 'El recurso no fue creado'
      	end		
	end


	#DELETE /identities/:identity_id/resources/:id
	def destroy
	 	@resource = Resource.find(params[:id])
	 	#@resource = @identity.resources.find(params[:id])
	 	@resource.destroy
	 	redirect_to identity_resources_path(@identity) , notice: 'Recurso eliminado' 
	end

	# GET    /identities/:identity_id/resources/:id/edit
  def edit
    @resource = Resource.find(params[:id])
  end

  # PUT    /identities/:identity_id/resources/:id
  def update
    @resource = Resource.find(params[:id])
	#@resource = @identity.resources.find(params[:id])

	if params[:commit].eql?("Editar")
		if @resource.update_attributes(params[:resource])
			redirect_to identity_resources_path(@identity) , notice: 'Recurso editado correctamente' 
		else
			render action: "edit"
		end	
    else #boton cancelar
      redirect_to identity_resources_path(@identity)               
    end   
  end



end

private 

	def load_identity
		if params[:identity_id] != nil #Para el show (/resource/:id )
			@identity = Identity.find(params[:identity_id])
		end
	end	
