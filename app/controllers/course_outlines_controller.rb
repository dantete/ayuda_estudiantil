class CourseOutlinesController < ApplicationController
  # GET /course_outlines
  # GET /course_outlines.json
  def index
    @course_outlines = CourseOutline.all

    respond_to do |format|
      format.html # index.html.erb
      format.json { render json: @course_outlines }
    end
  end

  # GET /course_outlines/1
  # GET /course_outlines/1.json
  def show
    @course_outline = CourseOutline.find(params[:id])

    respond_to do |format|
      format.html # show.html.erb
      format.json { render json: @course_outline }
    end
  end

  # GET /course_outlines/new
  # GET /course_outlines/new.json
  def new
    @course_outline = CourseOutline.new

    respond_to do |format|
      format.html # new.html.erb
      format.json { render json: @course_outline }
    end
  end

  # GET /course_outlines/1/edit
  def edit
    @course_outline = CourseOutline.find(params[:id])
  end

  # POST /course_outlines
  # POST /course_outlines.json
  def create
    @course_outline = CourseOutline.new(params[:course_outline])

    respond_to do |format|
      if @course_outline.save
        format.html { redirect_to @course_outline, notice: 'La malla fue creada correctamente' }
        format.json { render json: @course_outline, status: :created, location: @course_outline }
      else
        format.html { render action: "new" }
        format.json { render json: @course_outline.errors, status: :unprocessable_entity }
      end
    end
  end

  # PUT /course_outlines/1
  # PUT /course_outlines/1.json
  def update
    @course_outline = CourseOutline.find(params[:id])

    respond_to do |format|
      if @course_outline.update_attributes(params[:course_outline])
        format.html { redirect_to @course_outline, notice: 'Course outline was successfully updated.' }
        format.json { head :no_content }
      else
        format.html { render action: "edit" }
        format.json { render json: @course_outline.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /course_outlines/1
  # DELETE /course_outlines/1.json
  def destroy
    @course_outline = CourseOutline.find(params[:id])
    @course_outline.destroy

    respond_to do |format|
      format.html { redirect_to course_outlines_url }
      format.json { head :no_content }
    end
  end
end
