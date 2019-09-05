<?php

	class StatistikModel extends CI_Model
	{
		function getDataJenisKelamin()
	{

		$sql = "SELECT  COUNT(IF(jenis_kelamin='pria',1, NULL)) as pria,
       					COUNT(IF(jenis_kelamin='wanita',1, NULL)) as wanita
				FROM t_hasil_head";

		return $this->db->query($sql)->row();	
	}



		function getDataUsia()
	{

		$this->db->select('usia,pendidikan,count(usia) as total');
		$this->db->from('t_hasil_head');
		$this->db->group_by("usia");
		$this->db->group_by("pendidikan");
		$this->db->order_by("pendidikan",'asc');
		$query=$this->db->get();

		return $query->result();
	}

		function getDataPendidikan()
	{

		$this->db->select('pendidikan,count(pendidikan) as total');
		$this->db->from('t_hasil_head');
		$this->db->group_by("pendidikan");
		$this->db->order_by("pendidikan",'asc');
		$query=$this->db->get();

		return $query->result();
	}

	}

?>