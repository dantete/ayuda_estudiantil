class CreateResources < ActiveRecord::Migration
  def change
    create_table :resources do |t|
      t.references :identity
      t.string :type
      t.text :description
      t.boolean :tiene_codigo, :default => false
      t.boolean :visible, :default => false

      t.timestamps
    end
    add_index :resources, :identity_id
  end
end
