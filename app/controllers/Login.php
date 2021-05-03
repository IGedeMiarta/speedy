<?php

class Login extends Controller
{
    public function __construct()
    {
        $this->db = new Database;
    }

    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
    public function action()
    {
        $email =  $_POST['email'];
        $pass = $_POST['password'];

        $this->db->query("SELECT * FROM users WHERE email = '$email'");
        $user =  $this->db->result();

        if ($user) {
            if (password_verify($pass, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'email' => $user['email']
                ];
                $_SESSION['userdata'] = $data;
                header('Location: ' . base_url . '/home');
                exit;
            } else {
                Flasher::setFlash('Password', 'Salah', 'danger');
                header('Location: ' . base_url . '/login');
                exit;
            }
        } else {
            Flasher::setFlash('Tidak Ditemukan', 'Silahkan daftar', 'danger');
            header('Location: ' . base_url . '/login');
            exit;
        }
    }


    public function regist()
    {
        $data['judul'] = 'Regist';
        $this->view('templates/header', $data);
        $this->view('login/regist');
        $this->view('templates/footer');
    }
    public function regist_act()
    {

        if ($this->model('Login_model')->regist($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . base_url . '/login');
            exit;
        }
        Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
        header('Location: ' . base_url . '/login');
        exit;
    }

    public function logout()
    {
        unset($_SESSION['userdata']);
        Flasher::setFlash('Anda Sudah Logout', '', 'danger');
        header('Location: ' . base_url . '/login');
        exit;
    }
}
