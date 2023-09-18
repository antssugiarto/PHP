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

    public function detail($id)
    {
        $data['heading'] = "Student Detail";
        $data['users'] = $this->model('Users_model')->getUsers();
        $data['sdt'] = $this->model('Students_model')->getStudentById($id);
        $this->view('templates/header', $data);
        $this->view('students/detail', $data);
        $this->view('templates/footer');
    }
}
