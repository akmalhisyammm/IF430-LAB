<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('dosen');
    $this->load->model('mahasiswa');
  }

  public function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if (!($this->form_validation->run())) {
      $data = [
        'title' => 'Login',
      ];
      $this->load->view('templates/auth_header', $data);
      $this->load->view('auth/login');
      $this->load->view('templates/auth_footer');
    } else {
      $this->login();
    }
  }

  private function login()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));

    $user = $this->db->get_where('admin', ['email_admin' => $email])->row_array();
    if ($user) {
      if ($password == $user['password']) {
        $nama_lengkap = $user['fname_admin'] . " " . $user['lname_admin'];
        $data = [
          'nama' => $nama_lengkap
        ];
        $this->session->set_userdata($data);
        redirect('home/dosen');
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">Data yang anda masukkan tidak valid</div>');
        redirect('home');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger mt-3" role="alert">Akun anda belum terdaftar!</div>');
      redirect('home');
    }
  }

  public function dosen()
  {
    $data['title'] = "Lihat Dosen";
    $data['dosen'] = $this->dosen->getAllDosen();
    $this->load->view('templates/header', $data);
    $this->load->view('home/dosen_view', $data);
    $this->load->view('templates/footer');
  }

  public function mahasiswa()
  {
    $data['title'] = "Lihat Mahasiswa";
    $data['mahasiswa'] = $this->mahasiswa->getAllMahasiswa();
    $this->load->view('templates/header', $data);
    $this->load->view('home/mahasiswa_view', $data);
    $this->load->view('templates/footer');
  }

  public function hapusDosen($id)
  {
    $this->dosen->deleteDosenById($id);
    $this->session->set_flashdata('delete_notif', '<div class="alert alert-success" role="alert">Hapus dosen berhasil!</div>');
    redirect('home/dosen');
  }

  public function hapusMahasiswa($id)
  {
    $this->mahasiswa->deleteMahasiswaById($id);
    $this->session->set_flashdata('delete_notif', '<div class="alert alert-success" role="alert">Hapus mahasiswa berhasil!</div>');
    redirect('home/mahasiswa');
  }

  public function logout()
  {
    $this->session->unset_userdata('nama');
    $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">Log out berhasil!</div>');
    redirect('home');
  }
}
