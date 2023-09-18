<?php

class Home extends Controller
{
    public function index()
    {
        $data['heading'] = "Home";
        $data['users'] = $this->model('Users_model')->getUsers();
        $this->view('templates/header', $data);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
