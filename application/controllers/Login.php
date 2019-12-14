<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function __constract()
	{
		parent::__construct();
		
		
	}
	
	public function index()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		}else{
				
			$username = $this->input->post('email');
			$password = $this->input->post('password');
			
			$user = $this->db->get_where('user', ['email' => $username])->row_array();

			if ($user) {
					//jika user ada
				if ($password===$user['password']) {
						$data = [
							'id' => $user['id'],
							'nama' => $user['name'],
							'email' => $user['email'],
							'role' => $user['rolle']
						];
							
						$this->session->set_userdata( $data );
	
						redirect('user');
						
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
						Password salah/div>');
			
						//Loading View
					redirect('login');
				}
					
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					User tidak ada, silahkan Registrasi terlebih dahulu</div>');
			
					//Loading View
				redirect('login');
			}
				
				
		}
	}
}
