<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage extends CI_Controller {


	public function index()
	{

		$this->load->view('header');
		$this->load->view('homepage');
		$this->load->view('footer');
	}
	
	public function getQuestion(){
	
		$questions=$this->db->query('SELECT * FROM questions where id not in (select question_id as id from votes where user_id='.$this->session->userdata('id').')')->result();
	if(count($questions)>0){
	
			$answers=$this->db->where('question_id',$questions[0]->id)->get('answers')->result();
		
		echo json_encode(
		array(
			'message'=>"full",
		'question'=>$questions[0],
			'answers'=>$answers
		)
		);
	
	}else{
	
		echo json_encode(array("message"=>"empty"));
	
	}
	
	}
	
	public function answer(){
	$answer=$this->input->post('answer_id');
	$question=$this->input->post('question_id');
	$user_id=$this->session->userdata('id');
	$this->db->insert('votes',array(
	'user_id'=>$user_id,
	'question_id'=>$question,
	'answer_id'=>$answer	
	));
	echo 'success';
	}
}

