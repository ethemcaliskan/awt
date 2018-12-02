<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Result extends CI_Controller {

	public function testQuestion(){

		$users=$this->db->get('users')->result();
		$questions=$this->db->get('questions')->result();
		foreach($users as $u){
		
			foreach($questions as $q){
			
				$answers=$this->db->where('question_id',$q->id)->get('answers')->result();
				
				$insert=array('user_id'=>$u->id,
							 'question_id'=>$q->id,
							  'answer_id'=>$answers[rand(0,count($answers)-1)]->id
							 );
				$this->db->insert('votes',$insert);
			
			}		
		}
		
	}

	public function index()
	{
	$this->load->view('header');
		
	$this->load->view('result',array(
	'questions'=>$this->db->get('questions')->result()
	));
		
	$this->load->view('footer');
	
	}
	
	public function rates($question_id){
	
		$result=$this->db->query('select answers.id,answers.text,count(*) as number from votes,answers where answers.id=votes.answer_id and votes.question_id='.$question_id.' group by answers.id')
	->result();
		echo json_encode($result);
	}



}