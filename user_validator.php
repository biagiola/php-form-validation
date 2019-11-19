<?php 

    class UserValidator {

        private $data;
        private $erros = [];
        private static $fields = ['username', 'email'];

        public function __constructor( $post_data ) {
            $this->data = $post_data; // $post_data is $_POST data that is grab from the form's values when we press the submit button
        }

        public function validateForm() {
             
        }

        private function validateUsername() {

        }

        private function validateEmail() {

        }

        private function addError() {

        }

    }


?>