class CreateComments < ActiveRecord::Migration
  def change
    create_table :comments do |t|
      t.text :text
      t.belongs_to :resource
      t.belongs_to :identity
      t.timestamps
    end
  end
end
