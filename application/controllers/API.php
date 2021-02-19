<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Api extends CI_Controller {
	
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('M_Api');
        
    }
 
	public function index(){
		echo "ini method halo pada controller belajar";
	}
    
    public function show_data(){
        $response = array(); 
        $data_rental = $this->M_Api->get_data(); 
        
        if($data_rental->num_rows()>0){
            $response['pesan']=''; 
            $response['data']=$data_rental->result();
            $response['hasil']=true;
        }
        else{
            $response['pesan']='Data Kosong'; 
            $response['data']='';
            $response['hasil']=false;
        }
        echo json_encode($response);
    }
    

    public function insert_Data(){
        $nama = $this->input->post('nama');
        $gender = $this->input->post('gender');

        $simpan_data = $this->M_Api->insert_data($nama, $gender);
        

        $response = array(); 
        if($simpan_data){
            $response['pesan'] = 'Data berhasil disimpan'; 
            $response['hasil']= true; 
        } else {
            $response['pesan'] = 'gagal menyimpan data' ; 
            $response['hasil'] = false; 
            
        }
        echo json_encode($response);
    }
    

    public function delete_data($id){
        $get_data = $this->M_Api->get_databyid($id);
        $row = $get_data->row();
        $response = array(); 
        if($hapus_data){
            $response['pesan']='data berhasil dihapus';
            $response['hasil']='true'; 
        }
        else{
            $response['pesan']='data gagal dihapus';
            $response['hasil']='false'; 
        }
        echo json_encode ($response);
    }
 
}