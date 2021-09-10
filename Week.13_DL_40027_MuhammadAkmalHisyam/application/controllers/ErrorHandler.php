<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorHandler extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $data['title'] = "Halaman tidak ditemukan!";
    $this->load->view('templates/header', $data);
    $this->load->view('error_page');
    $this->load->view('templates/footer');
  }
}
