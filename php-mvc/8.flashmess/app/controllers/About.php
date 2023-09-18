<?php

class About extends Controller
{
    public function index()
    {
        $data['heading'] = "About";
        $data['users'] = $this->model('Users_model')->getUsers();
        $this->view('templates/header', $data);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}
