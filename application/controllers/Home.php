<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	 function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        //CRUD SISWA
        $this->load->model("Model_user");
	}
	

	public function index()
	{	$this->load->view('navbar');
        $this->load->view('home_template/home_view');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('navbar');
		$this->load->view('login_register/login');
		$this->load->view('footer');
	}

	public function register()
	{

		$this->load->view('navbar');
		$this->load->view('login_register/register');
		$this->load->view('footer');
	}


	public function profilUser()
	{
		$this->load->view('navbar');
		$this->load->view('user/profil_user');
		$this->load->view('footer');
	}

	// ==============================================
	// ======== BACK END ============================
	// ==============================================

	public function userAdd()
    {
        $tambah = $this->Model_user;
            $tambah->save();
			$this->session->set_flashdata('success', 'Berhasil Daftar, Silahkan Login');
        	redirect('Home/login');
    }
	
	
}
