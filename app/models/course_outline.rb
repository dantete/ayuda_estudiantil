class CourseOutline < ActiveRecord::Base
  attr_accessible :name, :start_date
  has_many :contains
  has_many :courses, :through => :contains
end
