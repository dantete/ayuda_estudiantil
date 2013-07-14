class ResourcesController < ApplicationController
	helper :identities 

	#GET    /resources/:id
	def show
		@resource = Resource.find(params[:id])
		idUser = session[:user_id]     	
		@identity =  Identity.find(idUser) 

	end

	# GET /identities/:identity_id/resources
	def index
		#idUser = session[:user_id]    
			
		@identity =  Identity.find(params[:identity_id]) 
		@resources = @identity.resources
	end

	# '/resources/all/:identity_id'
	def all		
		@resources = Resource.all
		@identity =  Identity.find(params[:identity_id]) 
	end

	
	#GET    /courses/:course_id/resources/new	
	def new		
		@course = Course.find(params[:course_id])		
		@resource = @course.resources.new

	end

	
	#POST   /courses/:course_id/resources
	def create
		#Necesito el semenstre y el curso para volver a ramo.
		semester = params[:resource].delete("semester")	 #elimino el hidden_field
		course_outline_id = params[:resource].delete("course_outline_id")	#elimino el hidden_field

		@course = Course.find(params[:course_id])
		@resource = @course.resources.create(params[:resource])

		idUser = session[:user_id] 
		identity_f =  Identity.find(idUser)     			 
		@resource.identity = identity_f 
		
		if @resource.save	        
	        redirect_to malla_semestre_curso_path( course_outline_id, semester, params[:course_id]) , notice: 'Recurso creado correctamente'	        
      	else
	        render action: "new" , notice: 'El recurso no fue creado'
      	end	
	end


	#DELETE /identities/:identity_id/resources/:id
	#DELETE /courses/:course_id/resources/:id
	def destroy
	 	@resource = Resource.find(params[:id])
	 	#@resource = @identity.resources.find(params[:id])
	 	@resource.destroy
	 	redirect_to identity_resources_path(session[:user_id] ) , notice: 'Recurso eliminado correctamente' 
	end

	
	# GET    /identities/:identity_id/resources/:id/edit	
  def edit
    @resource = Resource.find(params[:id])
    @identity =  Identity.find(params[:identity_id])  

  end

  
  #PUT    /identities/:identity_id/resources/:id
  def update
    @resource = Resource.find(params[:id])
	

	if params[:commit].eql?("Editar")
		if @resource.update_attributes(params[:resource])
			redirect_to identity_resources_path(session[:user_id] ) , notice: 'Recurso editado correctamente' 
		else
			render action: "edit"
		end	
    else #boton cancelar
      redirect_to identity_resources_path(session[:user_id] )               
    end   
  end



end

