<?php

class FormsModel extends CI_Model
{
	function getDataPertanyaan()
	{
		return $this->db->get('t_pertanyaan');
	}

	function tambahDataPertanyaan($data,$table){
		$this->db->insert($table,$data);
	}

	function editDataPertanyaan($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	 
	function updateDataPertanyaan($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	 
	function hapusDataPertanyaan($where,$table)
	{
	 	$this->db->where($where);
	  	$this->db->delete($table);
	}

}

?>