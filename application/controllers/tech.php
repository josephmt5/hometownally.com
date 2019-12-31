<?
defined('BASEPATH') OR exit('No direct script access allowed');

class tech extends CI_Controller {
	
	
	public function email()
	{
		$sess_id = $this->session->userdata('code');
	if($sess_id != "%%@@#1trump%%@@#1")
		
   {
		$message = "incorrect credentials";
			echo "<script type='text/javascript'>alert('$message');</script>";
        redirect("Welcome/index");

   }
	 
		$this->load->view('email');
	}
	


















}
?>