class Comment < ActiveRecord::Base
  attr_accessible :text

  belongs_to :identity
  belongs_to :resource

  validates :text,  :presence => true  
end
