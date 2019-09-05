<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Statistik extends CI_Controller
{

   public function __construct()
  {
    parent::__construct();
    
     $this->load->model('StatistikModel');
     $this->load->helper('url');
    
  }	

  public function index()
  {
    $data['getDataJenisKelamin'] = $this->StatistikModel->getDataJenisKelamin();
    $data['getDataUsia'] = $this->StatistikModel->getDataUsia();
    $data['getDataPendidikan'] = $this->StatistikModel->getDataPendidikan();
    $this->load->view('f_Statistik',$data);
    
  }

 
}