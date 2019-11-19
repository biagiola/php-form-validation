<?php 

    class UserValidator {

        private $data;
        private $erros = [];
        private static $fields = ['username', 'email'];

        public function __constructor( $post_data ) {
            $this->data = $post_data; // $post_data is $_POST data that is grab from the form's values when we press the submit button.
        }

        public function validateForm() {
            foreach( self::$fields as $field ) {
                // we ask if there is a field data [username and email] in the $data array that has the values from the inputs passed from the $_POST global variable.
                if( !array_key_exists( $field, $this->data )) { // if username or email doesnt exist it will throw a error message.
                    trigger_error("$field is not present in data" );
                    return;
                } 
                // but if it exist then we validate
                $this->validateUsername();
                $this->validateEmail();
            }
        }

        private function validateUsername() {

        }

        private function validateEmail() {

        }

        private function addError() {

        }

    }


?>