<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_rakernas');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('vIAI/home');
	}

	public function faq()
	{
		$this->load->view('vIAI/faq');
	}

	public function shop()
	{
		$this->load->view('vIAI/store');
	}

	public function sejarah()
	{
		$this->load->view('vIAI/sejarah');
	}

	public function struktur()
	{
		$this->load->view('vIAI/struktur_organisasi');
	}

	public function kepengurusan()
	{
		$this->load->view('vIAI/susunan_kepengurusan');
	}

	public function peraturan()
	{
		$this->load->view('vIAI/peraturan_umum');
	}

	public function berita()
	{
		$this->load->view('vIAI/artikel');
	}

	// wpl-03
	public function berita_organisasi()
	{
		$this->load->view('news/berita-organisasi');
	}
	public function pharma_update()
	{
		$this->load->view('news/pharma-update');
	}
	public function public_warning()
	{
		$this->load->view('news/public-warning');
	}
	public function berita_ringan()
	{
		$this->load->view('news/berita-ringan');
	}
	public function berita_kegiatan()
	{
		// $data['data_rakernas'] = $this->model_rakernas->tampil_rakernas()->result();
		$this->load->view('news/berita_kegiatan');
	}


	public function materi_rakernas_2017()
	{
		$data['data_rakernas'] = $this->model_rakernas->tampil_rakernas()->result();
		$this->load->view('news/berita-organisasi/materi-rakernas-2017', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
