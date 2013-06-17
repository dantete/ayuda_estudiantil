class Resource < ActiveRecord::Base
  belongs_to :identity
  attr_accessible :description, :tiene_codigo, :type, :visible
end
