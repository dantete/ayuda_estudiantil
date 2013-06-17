AyudaEstudiantil1::Application.routes.draw do
	resources :identities do
		resources :resources
	end
	resources :sessions



	root :to => 'home#index'
	match "/resources" => 'home#main_resources' , :as => 'main_resources'


	match "/auth/:provider/callback" => "sessions#create"
	match "/signout" => "sessions#destroy", :as => :signout
	match "/auth/failure" => "sessions#failure"
	
end
