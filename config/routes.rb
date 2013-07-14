AyudaEstudiantil1::Application.routes.draw do
	

	resources :sessions, only: [:new]
		
	resources :resources  , only: [:show] do
		resources :comments , only: [:destroy, :create]
	end

	
	resources :identities do
		resources :resources , only: [:index, :new, :create, :edit, :update, :destroy]
	end



  #get "plan/malla"
	match 'plan/malla/:course_outline_id/semestre/:semester', to: 'plan#malla', :as => :malla_semestre
	match 'plan/malla/:course_outline_id', to: 'plan#malla', :as => :malla
	match 'plan/malla/:course_outline_id/semestre/:semester/curso/:course_id', to: 'plan#curso', :as => :malla_semestre_curso

  resources :courses


  resources :course_outlines


	
	


	root :to => 'home#index'
	#match "/resources" => 'home#main_resources' , :as => 'main_resources'
	

	match "/auth/:provider/callback" => "sessions#create"
	match "/signout" => "sessions#destroy", :as => :signout
	match "/auth/failure" => "sessions#failure"
	
end
