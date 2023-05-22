<?php

class Home extends Controller {
    public function index()
    {   $data['judul'] = '| Make Your Animal Happy';
        $this->view('header/header', $data);
        $this->view('home/index');
        $this->view('header/footer');
    }
}