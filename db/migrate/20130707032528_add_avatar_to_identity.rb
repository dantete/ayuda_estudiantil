class AddAvatarToIdentity < ActiveRecord::Migration
  def self.up
    add_column :identities, :avatar_file_name, :string  # Original filename
    add_column :identities, :avatar_content_type, :string
    add_column :identities, :avatar_file_size, :integer # File size in bytes
  end
  def self.down
    remove_column :identities, :avatar_file_name
    remove_column :identities, :avatar_content_type
    remove_column :identities, :avatar_file_size
  end
end
