<?php
class FormLogin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    	$this->form_validation->set_rules('userPassword', 'Password','required|min_length[4]|max_length[10]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('vLogin');
			}else{
				echo '<script language="javascript">';
				echo 'alert("Login Complete")';
				echo '</script>';
				$this->load->view('vContact');
			}
	}

	public function masuk()
	{
		$this->load->view('vLogin');
  }
}
?>
