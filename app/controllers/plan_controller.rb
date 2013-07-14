class PlanController < ApplicationController
  def malla
		@co = CourseOutline.find(params[:course_outline_id])
  	@s = params[:semester]
  	@con = (Contain.where(:semester => @s) & Contain.where(:course_outline_id => @co.id))

  	@courses = []
	  @con.map { |e|  
	  	@courses << Course.find(e.course_id)
	  }
  end

#GET 'plan/malla/:course_outline_id/semestre/:semester/curso/:course_id'
  def curso
		@co = CourseOutline.find(params[:course_outline_id])
  	@s = params[:semester]
  	@c = Course.find(params[:course_id])
  	@con = (Contain.where(:semester => @s) & Contain.where(:course_outline_id => @co.id))

  	@courses = []
	  @con.map { |e|  
	  	@courses << Course.find(e.course_id)
	  }
  end
end
