class ResourcesController < ApplicationController
	before_filter :load_identity



	# GET /identities/:identity_id/resources
	def index
		@identity = Identity.find(params[:identity_id])
		@resources = @identity.resources
	end

	#GET /identities/:identity_id/resources/new(.:format)	
	def new

		@identity = Identity.find(params[:identity_id])
		@resource = @identity.resources.new

	end

	# POST /identities/:identity_id/resources(.:format)
	def create
		@identity = Identity.find(params[:identity_id])
		@resource = @identity.resources.create(params[:resource])    
		redirect_to identity_resources_path(@identity) , notice: 'Recurso creado correctamente'
	end


	#DELETE /identities/:identity_id/resources/:id
	def destroy
	 	@resource = Resource.find(params[:id])
	 	@resource = @identity.resources.find(params[:id])
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
		@identity = Identity.find(params[:identity_id])
	end	
