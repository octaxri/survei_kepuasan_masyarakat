<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pengaturan extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    
     $this->load->model('PengaturanModel');
     $this->load->helper('url');
    
  }
 
  public function index()
  {
    
    $data['pengaturan'] = $this->PengaturanModel->tampilData()->result();
    $this->load->view('f_Pengaturan',$data);
    
  }

 
}