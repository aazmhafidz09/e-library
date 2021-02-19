<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
//Cek Login
function login(){
		if($this->session->set_userdata('login') != "login")
			redirect(base_url().'welcome?pesan=belumlogin');
	}
}
	
function index(){
	$data['rental'] = $this->db->query("select * from rental order by no_transaksi desc limit 10")->result();
	$data['pelanggan'] = $this->db->query("select * from pelanggan order by no_pelanggan desc limit 10")->result();
	$data['mobil'] = $this->db->query("select * from mobil order by kode_mobil desc limit 10")->result();
	
	
$this->load->view("admin/header");
$this->load->view("admin/index",$data);
$this->load->view("admin/footer");
}
	
function mobil(){
	$data['mobil'] = $this->m_rental->get_data('mobil')->result();
	$this->load->view("login");

}


function pelanggan(){
	$data['pelanggan'] = $this->m_rental->get_data('pelanggan')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/pelanggan",$data);
	$this->load->view("admin/footer");
}


function rental(){
	$data['rental'] = $this->m_rental->get_data('rental')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/rental",$data);
	$this->load->view("admin/footer");
}

function print(){
	$data['rental'] = $this->m_rental->get_data('rental')->result();
	$this->load->view("print_laporan",$data);
	}
	

function laporan(){
	$data['rental'] = $this->m_rental->get_data('rental')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/laporan",$data);
	$this->load->view("admin/footer");
}

function tambah_mobil(){
	$data['kategori'] = $this->m_rental->get_data('kategori')->result();
	$this->load->view("admin/header");
	$this->load->view("admin/tambah_mobil",$data);
	$this->load->view("admin/footer");
}

function tambah_mobil_act(){
		
		$id_kategori = $this->input->post('id_kategori');
		$no_polisi = $this->input->post('no_polisi');
		$nama_mobil = $this->input->post('nama_mobil');
		$warna = $this->input->post('warna');
		$status_mobil = $this->input->post('status_mobil');
		$harga_sewa = $this->input->post('harga_sewa');
		
 
		$data = array(
		
			'id_kategori' => $id_kategori,
			'no_polisi' => $no_polisi,
			'nama_mobil' => $nama_mobil,
			'warna' => $warna,
			'harga_sewa' => $harga_sewa,
			'status_mobil' => $status_mobil,
			
			);
		$this->m_rental->insert_data($data,'mobil');
		redirect('admin');
}

function ganti_password(){
	$this->load->view("admin/header");
	$this->load->view("admin/ganti_password");
	$this->load->view("admin/footer");
}

function ganti_password_act(){
	$pass_baru = $this->input->post('pass_baru');
	$ulang_pass = $this->input->post('ualng_pass');
	
	$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
	$this->form_validation->set_rules('ulang_pass','Ulangi Password Baru','required');
	if($this->form_validation->run() !=FALSE){
		$data = array('password' => md5($pass_baru));
		$w = array('id_admin' => $this->session->userdata('id'));
		$this->m_rental->update_data($w,$data,'admin');
		redirect(base_url().'admin/ganti_password?pesan=berhasil');
		
	}else{	$this->load->view("admin/header");
			$this->load->view("admin/ganti_password");
			$this->load->view("admin/footer");
}

}
	
function logout(){
	$this->session->sess_destroy();
	redirect(base_url().'welcome?pesan=logout');
}
}
?>