<?php

class Login extends Controller {
    public function index()
    {   $data['judul'] = 'Login';
        $this->view('header/header', $data);
        $this->view('login/index');
        $this->view('header/footer');
    }
}