<?php  


class Authenticate
{

    private $CI;

    function __construct()
    {
        $this->CI =& get_instance();

        if(!isset($this->CI->session)){  //Check if session lib is loaded or not
              $this->CI->load->library('session');  //If not loaded, then load it here
        }
    }

   function loginCheck()
   {
$paths=explode('/',current_url());
        if($this->CI->session->userdata('id')||$paths[count($paths)-1]=="Login"||$paths[count($paths)-1]=="register"){
      
        }else{
		redirect('Login');
		
		}
    }
}