<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Forms extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    
     $this->load->model('FormsModel');
     $this->load->helper('url');
    
  }
 
  public function index()
  {
    $data['getPertanyaan'] = $this->FormsModel->getDataPertanyaan()->result();
    $this->load->view('f_Forms',$data);
    
  }

  public function tambahPertanyaan()
  {
      $pertanyaan = $this->input->post('pertanyaan');
      $deskripsi = $this->input->post('deskripsi');

      $data = array(
        'pertanyaan' => $pertanyaan,
        'deskripsi' => $deskripsi
        );

      $this->FormsModel->tambahDataPertanyaan($data,'t_pertanyaan');
      
      redirect('Forms/Forms');
  }

 public function editPertanyaan($id)
  {
      $where = array('id_pertanyaan' => $id);
      $data['getPertanyaan'] = $this->FormsModel->editDataPertanyaan($where,'t_pertanyaan')->result();
      $this->FormsModel->editDataPertanyaan($data,'t_pertanyaan');
      
      redirect('Forms/Forms');
  }
 
 public function updatePertanyaan()
  {
    $id_pertanyaan = $this->input->post('id_pertanyaan');
    $pertanyaan = $this->input->post('pertanyaan');
    $deskripsi = $this->input->post('deskripsi');
 
    $data = array(
      'pertanyaan' => $pertanyaan,
      'deskripsi' => $deskripsi
    );
 
    $where = array(
      'id_pertanyaan' => $id_pertanyaan
    );
 
    $this->FormsModel->updateDataPertanyaan($where,$data,'t_pertanyaan');
    redirect('Forms/Forms');
  }
 
 public function hapusPertanyaan($id)
  {
    $where = array('id_pertanyaan' => $id);
    $this->FormsModel->hapusDataPertanyaan($where,'t_pertanyaan');
    redirect('Forms/Forms');
  }

}