<?php
defined('BASEPATH') or exit ('no direct script access allowed');


class M_Api extends CI_Model{


    public function get_Data(){
        return $this->db->get('pelanggan');
    }
    public function insert_data($nama, $gender)
	{
		$data               = array();
		$data['nama']       = $nama;
		$data['gender']     = $gender;

		return $this->db->insert('pelanggan', $data);
    }
    
    public function get_databyid($id){
        $this->db->where('pelanggan',$id);
        return $this->db->get('pelanggan');
    }


    public function delete_data($id)
    {
        $this->db->where('pelanggan',$id);
        return $this->db->delete('pelanggan');
    }
   
 

}
