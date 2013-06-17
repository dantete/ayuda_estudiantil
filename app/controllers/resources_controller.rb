class ResourcesController < ApplicationController
	# GET /identities/:identity_id/resources
	def index
		@identity = Identity.find(params[:identity_id])
    	@resources = @identity.resources
  	end

  	# DELETE /posts/:id/comment/:id
  	# def destroy
  	# 	@post = Post.find(params[:post_id])
  	# 	@comment = @post.comments.find(params[:id])

end
