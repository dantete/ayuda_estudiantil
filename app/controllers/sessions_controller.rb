class SessionsController < ApplicationController
	include ApplicationHelper

	def new
		
	end

	def create
		user = User.from_omniauth(env["omniauth.auth"])
		session[:user_id] = user.id		

		#GUARDO LA CANTIDAD DE RECURSOS INVISIBLES
		# identity = Identity.find(user.id)
		# if identity.administrator 
		# 	resources_amount = Resource.where(:visible => false)
		# 	set_invisible_resources(resources_amount) 
		# end		
			

		#@identity = Identity.find(user.id)
		#@identity.build_avatar

		redirect_to root_url, :notice => "Usuario logueado"
		
	end

	def destroy
		session[:user_id] = nil
		redirect_to root_url, :notice => "La sesion ha sido cerrada"
	end

	def failure	
		# user = User.from_omniauth(env["omniauth.auth"])
		#uid = user.id
		mensaje = "Uno de los datos es incorrecto"
		redirect_to new_session_path, :notice => mensaje
	end
end
