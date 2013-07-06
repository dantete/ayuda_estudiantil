class CreateCourseOutlines < ActiveRecord::Migration
  def change
    create_table :course_outlines do |t|
      t.string :name
      t.date :start_date

      t.timestamps
    end
  end
end
