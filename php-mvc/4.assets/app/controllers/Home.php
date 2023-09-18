<?php

class Home extends Controller
{
    public function index()
    {
        $data['heading'] = "Home";
        $data['name'] = "Antonius";
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
