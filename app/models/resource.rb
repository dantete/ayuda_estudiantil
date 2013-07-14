class Resource < ActiveRecord::Base
  
  attr_accessible :title ,:description, :tiene_codigo, :resource_type, 
                  :visible, :grade, :professor,:file

  belongs_to :identity
  belongs_to :course

  has_many :comments , :dependent => :destroy #comentarios hechos en este recurso
  has_many :identities , through: :comments #identities que han comentado este recurso

  validates :title,  :presence => true  
  validates :description,  :presence => true  
  validates :resource_type,  :presence => true
  validates :file,  :presence => true 

  validates_format_of :grade, :with => /^$|[1-6]\.[0-9]|7\.0/i #valida notas entre 1.0 y 7.0
  #/ (para empezar)
  #^$ (string empty)
  #[1-6]\.[0-9] (1.0 - 6.9)
  #/i para terminar

  has_attached_file :file
  validates_attachment_size :file, :less_than => 2.megabytes
  
end
