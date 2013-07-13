class CommentsController < ApplicationController
  before_filter :load_identity
	
	#POST   /resources/:resource_id/comments(.:format) 
  def create
		@resource = Resource.find(params[:resource_id])
		@comment = @resource.comments.create(params[:comment])
    @comment.identity = @identity

    if @comment.save
      redirect_to resource_path(@resource) , notice: 'Comentario creado correctamente'
    else
      redirect_to resource_path(@resource) , notice: 'El comentario no fue creado'
    end
	end

	
  	
  	#DELETE /resources/:resource_id/comments/:id(.:format)
  	def destroy
  		@resource = Resource.find(params[:resource_id])
  		@comment = @resource.comments.find(params[:id])
  		
  		if @comment.destroy
      redirect_to resource_path(@resource) , notice: 'Comentario eliminado correctamente'
    else
      redirect_to resource_path(@resource) , notice: 'El comentario no fue eliminado'
    end
  	end

end

private 

  def load_identity
    idUser = session[:user_id]  
    if idUser != nil #Para el show (/resource/:id )
      @identity = Identity.find(idUser)
    end
  end 
