class Contain < ActiveRecord::Base
  attr_accessible :course_id, :course_outline_id, :semester
  belongs_to :course
  belongs_to :course_outline
end
