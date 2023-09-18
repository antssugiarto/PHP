<?php

class About extends Controller
{
    public function index()
    {
        $data['heading'] = "About";
        $data['name'] = "Antonius";
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
