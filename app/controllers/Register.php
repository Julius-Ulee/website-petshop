<?php

class Register extends Controller {
    public function index() {
        $data['judul'] = 'Register';
        $this->view('header/header', $data);
        $this->view('register/index');
        $this->view('header/footer');
    }
}