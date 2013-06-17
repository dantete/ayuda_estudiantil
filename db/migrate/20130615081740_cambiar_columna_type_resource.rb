class CambiarColumnaTypeResource < ActiveRecord::Migration
  def change
            change_column :resources, :type, :string
            rename_column :resources, :type, :resource_type
  end
end
