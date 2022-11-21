<?php
    namespace app\controllers;
    class User extends \app\core\Controller {
        public function index() {
            $this->view('Main/index');
        }

        public function book() {
            $this->view('User/booking');
        }
    }