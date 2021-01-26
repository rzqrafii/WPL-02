<?php
class FormHubungi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->form_validation->set_rules('userName', 'Username','required|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('number', 'Phone Number','required|numeric|max_length[15]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			if ($this->form_validation->run() == FALSE){
				// echo '<script language="javascript">';
				// echo 'alert("Sent Error")';
				// echo '</script>';
				$this->load->view('vContact');
			}else{
				// hubungisukses
				echo '<script language="javascript">';
				echo 'alert("Message Sent")';
				echo '</script>';
				$this->load->view('vContact');
			}
	}
	public function call()
	{
		$this->load->view('vContact');
	}
}
?>
