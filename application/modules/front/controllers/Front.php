<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 
//This is the Controller for codeigniter crud using ajax application.
class Front extends CI_Controller {

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('form','url','file');
			$this->load->library('session','upload');
	 		//$this->load->model('front_model');
			
			
	 	}

		public function index() 
		{
			//$this->load->view('front_index');
			//echo 'ok';
			//$data['tbl_mcontent']=$this->front_model->get_all_content();
			$this->load->view('front_index');
			//echo "<pre>"; print_r($data); die ();
		}
		
		public function profil() 
		{
			//$this->load->view('front_index');
			//echo 'ok';
			//$data['tbl_mcontent']=$this->front_model->get_all_content();
			$this->load->view('profil');
			//echo "<pre>"; print_r($data); die ();
		}
		
		public function galleri() 
		{
			//$this->load->view('front_index');
			//echo 'ok';
			//$data['tbl_mcontent']=$this->front_model->get_all_content();
			$this->load->view('galleri');
			//echo "<pre>"; print_r($data); die ();
		}
		
		public function kontak() 
		{
			//$this->load->view('front_index');
			//echo 'ok';
			//$data['tbl_mcontent']=$this->front_model->get_all_content();
			$this->load->view('kontak');
			//echo "<pre>"; print_r($data); die ();
		}
		
								
		
		





}