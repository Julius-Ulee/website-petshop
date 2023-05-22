<?php

class Product extends Controller {
    public function index()
    {   $data['judul'] = 'Product';
        $this->view('header/header', $data);
        $this->view('product/index');
        $this->view('header/footer');
    }
}