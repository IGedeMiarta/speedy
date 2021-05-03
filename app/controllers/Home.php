<?php

class Home extends Controller
{

    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $data['judul'] = 'Home';

        $data['user'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('user/home', $data);
        $this->view('templates/footer');
    }
    public function user_edt()
    {
        if ($this->model('User_model')->user_edt($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . base_url . '/home');
            exit;
        }
        Flasher::setFlash('Gagal', 'diubah', 'danger');
        header('Location: ' . base_url . '/home');
        exit;
    }

    public function education()
    {
        $data['judul'] = 'Education';
        $id = $_SESSION['userdata']['id'];
        $this->db->query("SELECT * FROM educations WHERE id_user=$id");
        $user =  $this->db->result();
        if ($user) {

            $data['edu'] = $this->model('User_model')->education();
            $this->view('templates/header', $data);
            $this->view('templates/nav');
            $this->view('user/edu', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header', $data);
            $this->view('templates/nav');
            $this->view('user/edu_inp');
            $this->view('templates/footer');
        }
    }

    public function edu_act()
    {
        if ($this->model('User_model')->edu_act($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . base_url . '/home/education');
            exit;
        }
        Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
        header('Location: ' . base_url . '/home/education');
        exit;
    }
    public function edu_edt()
    {
        if ($this->model('User_model')->edu_edt($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . base_url . '/home/education');
            exit;
        }
        Flasher::setFlash('Gagal', 'diubah', 'danger');
        header('Location: ' . base_url . '/home/education');
        exit;
    }

    public function employment()
    {
        $data['judul'] = 'Employment';
        $id = $_SESSION['userdata']['id'];
        $this->db->query("SELECT * FROM employments WHERE id_user=$id");
        $user =  $this->db->result();
        if ($user) {
            $data['empl'] = $this->model('User_model')->empl();
            $this->view('templates/header', $data);
            $this->view('templates/nav');
            $this->view('user/employment', $data);
            $this->view('templates/footer');
        } else {
            $this->view('templates/header', $data);
            $this->view('templates/nav');
            $this->view('user/empl_inp');
            $this->view('templates/footer');
        }
    }

    public function empl_act()
    {
        if ($this->model('User_model')->empl_act($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . base_url . '/home/employment');
            exit;
        }
        Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
        header('Location: ' . base_url . '/home/employment');
        exit;
    }
    public function empl_edt()
    {
        if ($this->model('User_model')->empl_edt($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: ' . base_url . '/home/employment');
            exit;
        }
        Flasher::setFlash('Gagal', 'diubah', 'danger');
        header('Location: ' . base_url . '/home/employment');
        exit;
    }

    public function cv()
    {
        $data['judul'] = 'CV';
        $data['user'] = $this->model('User_model')->getUser();
        $data['edu'] = $this->model('User_model')->education();
        $data['empl'] = $this->model('User_model')->empl();

        $this->view('templates/header', $data);
        $this->view('templates/nav');
        $this->view('user/cv', $data);
        $this->view('templates/footer');
    }

    public function user_del()
    {
        if ($this->model('User_model')->user_del($_GET) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . base_url . '/login');
            exit;
        }
        Flasher::setFlash('Gagal', 'dihapus', 'danger');
        header('Location: ' . base_url . '/home');
        exit;
    }
    public function edu_del()
    {
        if ($this->model('User_model')->edu_del($_GET) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . base_url . '/home/education');
            exit;
        }
        Flasher::setFlash('Gagal', 'dihapus', 'danger');
        header('Location: ' . base_url . '/home/education');
        exit;
    }
    public function empl_del()
    {
        if ($this->model('User_model')->empl_del($_GET) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . base_url . '/home/employment');
            exit;
        }
        Flasher::setFlash('Gagal', 'dihapus', 'danger');
        header('Location: ' . base_url . '/home/employment');
        exit;
    }
}
