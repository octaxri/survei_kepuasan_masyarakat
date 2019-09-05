<?php

class HomesModel extends CI_Model
{
	function totalResponden()
	{
		$query = $this->db->get('t_hasil_head');
		
		  if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	      else
	    {
	      return 0;
	    }
	}

	function totalPenilaian()
	{
		$this->db->select('SUM(bobot) as bobot');
		$this->db->from('t_hasil_child');
		$this->db->join('t_jawaban','t_jawaban.id_jawaban=t_hasil_child.id_jawaban');
		$this->db->order_by("tgl_survei",'DESC');
		$query=$this->db->get();

		return $query->row();		
	}

	function rataPenilaian()
	{
		$this->db->select('AVG(bobot) as bobot');
		$this->db->from('t_hasil_child');
		$this->db->join('t_jawaban','t_jawaban.id_jawaban=t_hasil_child.id_jawaban');
		$query=$this->db->get();

		return $query->row();		
	}

	function responTerakhir()
	{

		$this->db->select('t_hasil_head.id_survei,usia,jenis_kelamin');
		$this->db->from('t_hasil_head');
		$this->db->join('t_hasil_child','t_hasil_child.id_survei=t_hasil_head.id_survei');
		$this->db->group_by("id_survei");
		$this->db->order_by("tgl_survei",'DESC');
		$query=$this->db->get();

		return $query->result();	
	}

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