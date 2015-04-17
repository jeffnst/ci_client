<?php
class menu extends CI_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	function home(){
		//$data['content'] = 'home/content';
		//$this->load->view('home/index',$data);
		$this->load->view('main/index');
	}
	function about(){
		$this->load->view('main/about');
		
	}
	function contact(){
		$this->load->view('main/contact');
		
	}
	function login(){
		$this->load->view('member/login');
	}
	function register(){
		$this->load->view('member/register');
	}
}