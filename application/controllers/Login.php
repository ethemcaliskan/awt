<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
public function index(){

	$this->load->view('header',array('avoid_header'=>true));
		$this->load->view('login');
	$this->load->view('footer');
	
	
}
	
	public function register(){

	$this->load->view('header',array('avoid_header'=>true));
		$this->load->view('register');
	$this->load->view('footer');
	
	
}
	
	public function control(){
	$username=$this->input->post("username");
    $password=$this->input->post("password");

    $num=$this->db->where(array('email'=>$username,'password'=>md5($password)))->get("users")->result();

		if(count($num)>0){
			$this->session->set_userdata(array('username'=>$username,'id'=>$num[0]->id));
		redirect('/homePage');
		}else{
		redirect('/Login');
		}
	}
	
	public function registerProcess(){
	$firstname=$this->input->post("firstname");
	$lastname=$this->input->post("lastname");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		
	
		
		$this->db->insert('users',array(
		'firstname'=>$firstname,
			'lastname'=>$lastname,
			'email'=>$email,
			'password'=>md5($password)
		));
		
	redirect('Login');
		
	}
}


?>