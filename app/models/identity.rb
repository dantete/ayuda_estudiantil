class Identity < OmniAuth::Identity::Models::ActiveRecord



	has_many :resources , :dependent => :nullify  #Recursos creados/subidos por la identity
	#:nullify CUnado se borra la identity en la tabla resource deja la colmn id_identity en null (empty)

	#has_many :resources , through: :comments #recuros comentados por esta identitys
	
	has_many :comments , :dependent => :destroy #comentarios que ha hecho esta identity (probado el destroy)

	has_one :avatar , :dependent => :destroy
	
	accepts_nested_attributes_for :avatar, :allow_destroy => :true, :reject_if => proc { |attrs| attrs.all? { |k, v| v.blank? } }
	

	validates_presence_of :name
	validates_uniqueness_of :email	
	validates_format_of :email, :with => /^[-a-z0-9_+\.]+\@a.cl$/i
	#validates_format_of :email, :with => /^[-a-z0-9_+\.]+\@(alumnos\.)?utalca.cl$/i

	  	
end
