<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('home_model');
  }

  public function index()
  {
    $data = [
      'js' => $this->load->view('include/javascript.php', NULL, TRUE),
      'css' => $this->load->view('include/css.php', NULL, TRUE),
      'header' => $this->load->view('include/header.php', NULL, TRUE),
      'footer' => $this->load->view('include/footer.php', NULL, TRUE),
      'product' => $this->home_model->get_product()
    ];

    $this->load->view('pages/homeview.php', $data);
  }
}
