<?php 

	class Validate {
        
        public static function hasEmptyFields($postData = array()) {
            foreach ($postData as $field) {
                if(empty($field)) {
                    return true;
                }
            }
        }

	}
