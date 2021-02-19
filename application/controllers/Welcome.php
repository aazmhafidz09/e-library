<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Welcome extends CI_Controller{
	function __construct(){
		parent::__construct();
}
public function index(){
	$this->load->view("login");
}

public function login(){
	$username = $this->input->post("username");
	$password = $this->input->post("password");
	$this->form_validation->set_rules("username","Username","trim|required");
	$this->form_validation->set_rules("password","Password","trim|required");
	
	if($this->form_validation->run() !=FALSE){
		$where = array('username' => $username, 'password' => md5($password));
		
		$data = $this->m_rental->edit_data($where, 'admin');
		$d = $this->m_rental->edit_data($where, 'admin')->row();
		$cek = $data->num_rows();
	if($cek > 0){
		$session = array('id' => $d->id_admin, 'nama' => $d->nama_admin, 'status' => 'login');
		$this->session->set_userdata($session);
		redirect(base_url().'admin');
	}
	 else{
		 $this->session->flashdata('alert','Login gagal! Username atau Password salah.');
		 redirect(base_url().'welcome?pesan=gagal');

	 }
	}else{
		$this->session->flashdata('alert','Anda Belum Mengisi Username atau Password.');
		redirect(base_url().'welcome?pesan=belumlogin');
		$this->load->view('login');
	  }
	} 
  }
?>