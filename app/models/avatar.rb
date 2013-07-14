class Avatar < ActiveRecord::Base
  attr_accessible :photo #nested cuando se crea la identity
  
  belongs_to :identity
  has_attached_file :photo, :styles => {:thumb=> "100x100#",:small  => "150x150>" }
  validates_attachment_size :photo, :less_than => 500.kilobytes
  validates_attachment_content_type :photo, :content_type => ['image/jpeg', 'image/png','image/gif']

end
