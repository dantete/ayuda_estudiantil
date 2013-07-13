#encoding: utf-8 
namespace :init do
  desc "TODO"
  task :load => :environment do

    Contain.delete_all
    Course.delete_all
    CourseOutline.delete_all
    
############

    malla = CourseOutline.new(:name => "plan 44", :start_date => "10-01-2001")
    malla.save
    malla2 = CourseOutline.new(:name => "plan 100", :start_date => "10-01-2020")
    malla2.save

############

    curso = Course.new(:name => "Progra", :description => "2do ramo progra")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 2)
    relacion.save

############

    curso = Course.new(:name => "sol", :description => "1do ramo progra")
    curso.save

    relacion = Contain.new(:course_id => curso.id, :course_outline_id => malla.id, :semester => 1)
    relacion.save

    relacion2 = Contain.new(:course_id => curso.id, :course_outline_id => malla2.id, :semester => 2)
    relacion2.save

############

  end

end