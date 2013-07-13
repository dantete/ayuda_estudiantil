require 'test_helper'

class PlanControllerTest < ActionController::TestCase
  test "should get malla" do
    get :malla
    assert_response :success
  end

end
