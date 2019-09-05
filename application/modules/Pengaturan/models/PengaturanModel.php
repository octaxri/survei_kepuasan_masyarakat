<?php

class PengaturanModel extends CI_Model
{
	function tampilData()
	{
		return $this->db->get('t_user');
	}
}

?>