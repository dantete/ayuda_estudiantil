class Course < ActiveRecord::Base
  attr_accessible :description, :name
  has_many :contains
  has_many :course_outlines, :through => :contains
  has_many :resources , :dependent => :nullify

end
