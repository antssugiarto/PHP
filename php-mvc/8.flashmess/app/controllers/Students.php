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

    public function detail($nim)
    {
        $data['heading'] = "Student Detail";
        $data['users'] = $this->model('Users_model')->getUsers();
        $data['sdt'] = $this->model('Students_model')->getStudentById($nim);
        $this->view('templates/header', $data);
        $this->view('students/detail', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        if ($this->model("Students_model")->addStudent($_POST) > 0) {
            Flasher::setFlash("success", "to add", "success");
            header("Location: " .  BASEURL . "students");
            exit;
        } else {
            Flasher::setFlash("failed", "to add", "danger");
            header("Location: " .  BASEURL . "students");
            exit;
        }
    }
}
