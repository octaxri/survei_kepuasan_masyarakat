<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Home extends CI_Controller{

   public function __construct()
  {
    parent::__construct();
    
     $this->load->model('HomesModel');
     $this->load->helper('url');
    
  }
 
  public function index()
  {

    $data['totalResponden'] = $this->HomesModel->totalResponden();
    $data['totalPenilaian'] = $this->HomesModel->totalPenilaian();
    $data['rataPenilaian'] = $this->HomesModel->rataPenilaian();
    $data['responTerakhir'] = $this->HomesModel->responTerakhir();
    $data['getDataJenisKelamin'] = $this->HomesModel->getDataJenisKelamin();
    $data['getDataUsia'] = $this->HomesModel->getDataUsia();
    $data['getDataPendidikan'] = $this->HomesModel->getDataPendidikan();
    $this->load->view('f_Dashboard',$data);
    
  }

}