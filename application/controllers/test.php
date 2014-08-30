<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

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
		$this->load->view('welcome_message');
	}

	public function hello(){
		$this->load->view('testView');
	}

	public function feed(){
		$this->load->view('header');
		$this->load->view('feed');
		$this->load->view('footer');
	}

	public function homepage(){
		$this->load->view('header');
		$this->load->view('homepage');
		$this->load->view('footer');
		
	}
	
	public function register(){
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function detail(){
		$this->load->view('header');
		$this->load->view('detail');
		$this->load->view('footer');
	}

	public function admin(){
		$this->load->view('header');
		$this->load->view('admin');
		$this->load->view('footer');
		
	}
	public function reportedPost(){
		$this->load->view('header');
		$this->load->view('choose');
		$this->load->view('reportedPost');
		$this->load->view('footer');
	}
	public function locationInfo(){
		$this->load->view('header');
		$this->load->view('locationInfo');
		$this->load->view('footer');
		
	}
	public function userStatistics(){
		$this->load->view('header');
		$this->load->view('userStatistics');
		$this->load->view('footer');
		
	}
	public function systemInfo(){
		$this->load->view('header');
		$this->load->view('systemInfo');
		$this->load->view('footer');
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */