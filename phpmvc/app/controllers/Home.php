<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this->model('user_model')->getuser();
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}