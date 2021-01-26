<?php
class Upload extends CI_Controller{
	public function __construct(){
		parent ::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('Upload_form',array ('error'=> ' '));
	}
	public function do_upload(){
		$config['upload_path'] 		='./application/views/uploads/';
		$config['allowed_types'] 	='pdf|jpg|png|3gpp|mp4|wmv|mp3|doc|docx';
		$config['max_size'] 		= 1000000;
		// $config['max_width']		= 102400;
		// $config['max_height']		= 76800;
		$this->load->library('upload',$config);
		// $this->load->library('upload');

		if (! $this->upload->do_upload('userfile')){
			// echo '<script type="text/javascript">alert("Wrong File, Please Try Again");</script>';
			// echo anchor('upload');
			$error =array('error' => $this->upload->display_errors());
			
			$this->load->view('Upload_form',$error);
		}

		else {
			$data = array ('upload_data' =>$this->upload->data());
			$this->load->view('Upload_success',$data);

		}

	}
	}
?>