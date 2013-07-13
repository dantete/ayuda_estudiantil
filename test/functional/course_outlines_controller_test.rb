require 'test_helper'

class CourseOutlinesControllerTest < ActionController::TestCase
  setup do
    @course_outline = course_outlines(:one)
  end

  test "should get index" do
    get :index
    assert_response :success
    assert_not_nil assigns(:course_outlines)
  end

  test "should get new" do
    get :new
    assert_response :success
  end

  test "should create course_outline" do
    assert_difference('CourseOutline.count') do
      post :create, course_outline: { name: @course_outline.name, start_date: @course_outline.start_date }
    end

    assert_redirected_to course_outline_path(assigns(:course_outline))
  end

  test "should show course_outline" do
    get :show, id: @course_outline
    assert_response :success
  end

  test "should get edit" do
    get :edit, id: @course_outline
    assert_response :success
  end

  test "should update course_outline" do
    put :update, id: @course_outline, course_outline: { name: @course_outline.name, start_date: @course_outline.start_date }
    assert_redirected_to course_outline_path(assigns(:course_outline))
  end

  test "should destroy course_outline" do
    assert_difference('CourseOutline.count', -1) do
      delete :destroy, id: @course_outline
    end

    assert_redirected_to course_outlines_path
  end
end
