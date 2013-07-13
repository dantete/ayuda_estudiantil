class AddTitleToResources < ActiveRecord::Migration
  def change
    add_column :resources, :title, :string
    add_column :resources, :grade, :string
    add_column :resources, :professor, :string
  end
end
