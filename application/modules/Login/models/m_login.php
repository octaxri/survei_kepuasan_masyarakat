<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_login extends CI_Model{

  

  public function ambillogin($username,$password)
  {

    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $query = $this->db->get('t_user');
    if($query->num_rows()>0){
      foreach ($query->result() as $row) {
        $sess = array('username' => $row ->username,
                      'password' => $row->password,
                      'last_login'=>date('Y-m-d H:i:s')


              
      );
     }

     $this->session->get_userdata($sess);
     $this->session->set_userdata($sess);
     $this->db->where('username',$result->username);
     $this->db->update('t_user', array('last_login'=> date('Y-m-d H:i:s')));
     redirect('Dashboard/Home');
    }

    else
    {
      ?>
      <div class="alert alert-danger" role="alert">
        <?php  
          $this->session->set_flashdata('info','Maaf Username dan Password anda salah!');
          redirect('');
        ?>
      </div>
    <?php  
    }
  }
  public function logout($date, $username)
    {
        $this->db->where('t_user.username', $username);
        $this->db->update('t_user', $date);
    }


}
?>

