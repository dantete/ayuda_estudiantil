#encoding: utf-8
class CoursesController < ApplicationController
  # GET /courses
  # GET /courses.json
  def index
    @courses = Course.all

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @courses }
    end
  end

  # GET /courses/1
  # GET /courses/1.json
  def show
    @course = Course.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @course }
    end
  end

  # GET /courses/new
  # GET /courses/new.json
  def new
    @course = Course.new
    @mallas = CourseOutline.all
    @semesters = ["Primer", 1], ["Segundo", 2], ["Tercer", 3], ["Cuarto", 4], ["Quinto", 5], ["Sexto", 6], ["Séptimo", 7], ["Octavo", 8], ["Noveno", 9], ["Décimo", 10], ["Décimo Primer", 11], ["Décimo Segundo", 12]

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @course }
    end
  end

  # GET /courses/1/edit
  def edit
    @course = Course.find(params[:id])
    @mallas = CourseOutline.all
    @contains = Contain.where(:course_id => @course.id)
    @semesters = ["Primer", 1], ["Segundo", 2], ["Tercer", 3], ["Cuarto", 4], ["Quinto", 5], ["Sexto", 6], ["Séptimo", 7], ["Octavo", 8], ["Noveno", 9], ["Décimo", 10], ["Décimo Primer", 11], ["Décimo Segundo", 12]
    malla_ids = params[:malla_ids] if params[:malla_ids]
  end

  # POST /courses
  # POST /courses.json
  def create
    @course = Course.new(params[:course])
    malla_ids = params[:malla_ids] if params[:malla_ids]
    malla_ids ||= []
    sem = params[:s]

    respond_to do |format|
      if @course.save
        for i in 0..malla_ids.length-1
          @contain = Contain.new(:course_id => @course.id, :course_outline_id => malla_ids[i], :semester => sem[i])
          @contain.save
        end

        format.html { redirect_to @course, notice: 'Curso creado correctamente' }
        format.json { render json: @course, status: :created, location: @course }
      else
        format.html { render action: "new" }
        format.json { render json: @course.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /courses/1
  # PUT /courses/1.json
  def update
    @course = Course.find(params[:id])
    malla_ids = params[:malla_ids] if params[:malla_ids]
    malla_ids ||= []
    sem = params[:s]

    respond_to do |format|
      if @course.update_attributes(params[:course])
        con = Contain.where(:course_id => @course.id)
        con.delete_all
        for i in 0..malla_ids.length-1
          @contain = Contain.new(:course_id => @course.id, :course_outline_id => malla_ids[i], :semester => sem[i])
          @contain.save
        end

        format.html { redirect_to @course, notice: 'Course was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @course.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /courses/1
  # DELETE /courses/1.json
  def destroy
    @course = Course.find(params[:id])
    @course.destroy

    respond_to do |format|
      format.html { redirect_to courses_url }
      format.json { head :no_content }
    end
  end
end
