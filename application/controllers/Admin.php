<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()	{
		
		$this->load->view('admin/login');
		
	}

	public function reset_password() {
		
		$this->load->view('admin/reset_password');
		
	}

	public function login() {
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if($username == "admin" && $password == "admin"){
			$this->dashboard();
		}else{
			?>
			<script type="text/javascript">
                alert("Username/Password Salah!");
            </script>
			<?php
			$this->index();
		}
	}
	
	public function dashboard()	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
		
	}

	public function tambah_kk()	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/tambah_kk');
		$this->load->view('admin/footer');
		
	}
	

	public function logout(){
		if($this->session->userdata("sess_username")){
            $this->session->sess_destroy();
		}
		redirect(site_url("admin/"),"refresh");
	}
}
