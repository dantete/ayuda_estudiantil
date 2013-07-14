class AddBelongToToResource < ActiveRecord::Migration
  def up
    change_table :resources do |t|
      t.belongs_to :course
    end
  end
 
end
