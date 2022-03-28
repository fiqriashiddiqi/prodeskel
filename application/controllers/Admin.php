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

	public function user_management(){
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/user_management');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}		
	}

	public function add_user(){
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_user');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
		
	}

	public function customer_list()	{
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/customer_list');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function outlet_management()	{
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/outlet_list');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function outlet_management_brach(){
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_outlet_branch');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function add_outlet()	{
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_outlet');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function add_outlet_branch()	{
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_outlet_branch');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function global_variable()	{
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/global_variable');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function list_news()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_news');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function add_news()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_news');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function list_voucher()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_voucher');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function add_voucher()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_voucher');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function list_event()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_event');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function add_event()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_event');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function list_promo()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_promo');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function add_promo()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/add_promo');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function birthday_management()	{
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/birthday_management');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function push_notif(){
		
		if($this->session->userdata("sess_username") && $this->session->userdata("sess_role")==1){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/push_notif');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function list_notif(){
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_notification');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function list_carousel(){
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/list_carousel');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function form_bottle_keep(){
			$this->load->view('admin/header');
			$this->load->view('admin/form_bottle_keep');
			$this->load->view('admin/footer');
		
	}

	public function form_checkout_bottle(){
		$this->load->view('admin/header');
		$this->load->view('admin/form_checkout_bottle');
		$this->load->view('admin/footer');
	
	}

	public function success(){
		$this->load->view('admin/header');
		$this->load->view('admin/success_checkout');
		$this->load->view('admin/footer');
	
	}

	public function success_keeping(){
		$this->load->view('admin/header');
		$this->load->view('admin/success_keeping');
		$this->load->view('admin/footer');
	
	}

	public function history_keep()	{
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/history_keep');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function form_update_password(){
		$this->load->view('admin/header');
		$this->load->view('admin/form_update_password');
		$this->load->view('admin/footer');
	
	}

	public function success_password(){
		$this->load->view('admin/header');
		$this->load->view('admin/success_password');
		$this->load->view('admin/footer');
	
	}

	public function report(){
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/report');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function report_membership(){
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/report_membership');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function report_voucher(){
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/report_voucher');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function report_point(){
		
		if($this->session->userdata("sess_username")){
			$this->load->view('admin/header_admin');
			$this->load->view('admin/report_point');
			$this->load->view('admin/footer');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function print()	{
		if($this->session->userdata("sess_id")){
			$this->load->view('admin/print');
		}else{
			redirect(site_url("admin/"),"refresh");
		}
	}

	public function logout(){
		if($this->session->userdata("sess_username")){
            $this->session->sess_destroy();
		}
		redirect(site_url("admin/"),"refresh");
	}
}
