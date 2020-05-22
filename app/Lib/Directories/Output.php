<?php 

	class Output {

		public static function response($data = array()) {
            return json_encode($data);
        }

        public static function error($message = null) {
            $data = array(
                'status' => 0,
                'message' => $message,
                'type' => 'Error'
            );

            return $data;
        }

        public static function success($message = null, $result = null) {
            $data = array(
                'status' => 1,
                'message' => $message,
                'type' => 'Success',
                'result' => $result
            );

            return $data;
        }

        public static function message($key = null) {
            $data = array(
                'created' => 'Article has been successfully created.',
                'missingField' => 'Some fields are missing.',
                'error' => 'An error occured upon processing your request.',
                'updated' => 'Article has been successfully updated. Please reload the page.',
                'upvoted' => 'This article has been upvoted. Please reload the page.',
                'downvoted' => 'This article has been downvoted. Please reload the page.',
                'deleted' => 'Article has been successfully deleted. Please reload the page.'
            );

            return $data[$key];
        }

	}
