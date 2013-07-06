class CreateContains < ActiveRecord::Migration
  def change
    create_table :contains do |t|
      t.integer :semester
      t.integer :course_id
      t.integer :course_outline_id

      t.timestamps
    end
  end
end
