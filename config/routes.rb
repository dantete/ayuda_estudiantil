AyudaEstudiantil1::Application.routes.draw do
	
	resources :sessions, only: [:new]
		
	resources :resources  , only: [:show] do
		resources :comments , only: [:destroy, :create]
	end

	#resources :resources , only: [:show]
	resources :identities do
		resources :resources , only: [:index, :new, :create, :edit, :update, :destroy]
	end
	# resources :posts do
	# 	resources :comments, only: [:index, :new, :create]
	# end
	# resources :comments, only: [:show, :edit, :update, :destroy]

	root :to => 'home#index'
	#match "/resources" => 'home#main_resources' , :as => 'main_resources'
	#get '/identities/:identity_id/resources/new', to: 'resources#new', as: 'resources'
	#get '/identities/:identity_id/resources/new', to: 'resources#new'

	match "/auth/:provider/callback" => "sessions#create"
	match "/signout" => "sessions#destroy", :as => :signout
	match "/auth/failure" => "sessions#failure"
	
end
