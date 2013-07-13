class DeleteAvatarToIdentities < ActiveRecord::Migration
  def up
  	remove_column :identities, :avatar_file_name
    remove_column :identities, :avatar_content_type
    remove_column :identities, :avatar_file_size
  end

  
end
