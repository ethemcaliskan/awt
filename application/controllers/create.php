<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {


	public function index()
	{
	$this->load->view("header");
	$this->load->view("create");
	$this->load->view("footer");

		
	
	}
	
	public function add(){
	$question=$this->input->post('question');
	$answers=$this->input->post('answers');
	$this->db->insert('questions',array('text'=>$question));
	$question_id=$this->db->insert_id();
	foreach($answers as $answer){
	$this->db->insert('answers',array('text'=>$answer,'question_id'=>$question_id));
	}
		echo 'success';
	}



}


