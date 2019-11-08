<?php

class Mhome extends CI_Model {

 	public function __construct () {
		parent::__construct();

	}

	public function data_pegawai_payroll()
	{
		# code...
		$sql = "SELECT a.pegawai_id, 
		a.pegawai_nama, 
		a.pegawai_nip,
		a.tgl_mulai_kerja,
		a.*,
		p1.pembagian1_nama as str_1,
		p2.pembagian2_nama as str_2,
		p3.pembagian3_nama as str_3
FROM pegawai a
LEFT JOIN pembagian1 p1 ON a.pembagian1_id = p1.pembagian1_id
LEFT JOIN pembagian2 p2 ON a.pembagian2_id = p2.pembagian2_id
LEFT JOIN pembagian3 p3 ON a.pembagian3_id = p3.pembagian3_id
WHERE a.pegawai_status = 1
				";
		$query = $this->db->query($sql);
		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return 0;
		}
	}	

}
