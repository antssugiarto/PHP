<?php

class Students extends Controller
{
    public function index()
    {
        $data['heading'] = "Students";
        $data['users'] = $this->model('Users_model')->getUsers();
        $data['sdts'] = $this->model('Students_model')->getAllStudents();
        $this->view('templates/header', $data);
        $this->view('students/index', $data);
        $this->view('templates/footer');
    }
}
