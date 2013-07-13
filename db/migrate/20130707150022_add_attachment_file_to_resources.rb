class AddAttachmentFileToResources < ActiveRecord::Migration
  def self.up
    add_column :resources, :file_file_name, :string
    add_column :resources, :file_content_type, :string
    add_column :resources, :file_file_size, :integer
  end
  def self.down
    remove_column :resources, :file_file_name
    remove_column :resources, :file_content_type
    remove_column :resources, :file_file_size
  end
end
