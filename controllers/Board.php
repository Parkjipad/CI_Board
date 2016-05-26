<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Board_model');
	}

	public function index()
	{
		$data['list'] = $this->Board_model->view_posts();

		$this->load->view('top');
		$this->load->view('Board',$data);
		$this->load->view('footer');
	}

	public function content($no)
	{
		$content['list'] = $this->Board_model->view_content($no);
		
		$this->load->view('top');
		$this->load->view('post_content',$content);
		$this->load->view('footer');
	}
}
