AyudaEstudiantil1::Application.routes.draw do
	
	resources :sessions
	
	resources :identities do
		resources :resources
	end
	

	root :to => 'home#index'
	#match "/resources" => 'home#main_resources' , :as => 'main_resources'
	#get '/identities/:identity_id/resources/new', to: 'resources#new', as: 'resources'
	#get '/identities/:identity_id/resources/new', to: 'resources#new'

	match "/auth/:provider/callback" => "sessions#create"
	match "/signout" => "sessions#destroy", :as => :signout
	match "/auth/failure" => "sessions#failure"
	
end
