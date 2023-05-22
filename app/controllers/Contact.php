<?php

class Contact extends Controller {
    public function index()
    {   $data['judul'] = 'Contact Person';
        $this->view('header/header', $data);
        $this->view('contact/index');
        $this->view('header/footer');
    }
}