<?php
    namespace app\controllers;
    class User extends \app\core\Controller {
        public function login() {
            $this->view('User/login');
        }

        public function register() {
            
        }

        public function logout() {

        }

        public function book() {
            $this->view('User/booking');
        }
    }