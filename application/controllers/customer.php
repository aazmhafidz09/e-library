<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Customer extends CI_Controller {
	
    function index(){
        
        $this->load->view("customer/home");
        
    }  function home(){
        
        $this->load->view("customer/home");
        
    }
    function about(){
        $this->load->view("customer/about");
    }
    function cars(){
        $this->load->view("customer/cars");
    }
    function team(){
        $this->load->view("customer/team");
    }
    function pesanan(){
        $this->load->view("customer/pesanan");
    }
 
}