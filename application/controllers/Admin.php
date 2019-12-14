<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		if (!isset($_SESSION)) {
			redirect('admin/login');
			exit();
		} else {
				$data['user'] = [
					'nama' => $this->session->userdata('nama'),
					'email' => $this->session->userdata('email'),
					'rolle' => $this->session->userdata('role')
				];
				$this->load->view('admin/index-admin', $data);
		}
		
		
	}

	public function login()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('inputEmail', 'Email', 'trim|required');
		$this->form_validation->set_rules('inputPassword', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login-admin');
		}else{
				
			$username = $this->input->post('inputEmail');
			$password = $this->input->post('inputPassword');
			
			$user = $this->db->get_where('admin', ['email' => $username])->row_array();

			if ($user) {
					//jika user ada
				if ($password===$user['password']) {
					if ($user['rolle']==="admin") {
						$data = [
							'id' => $user['id'],
							'nama' => $user['nama'],
							'email' => $user['email'],
							'role' => $user['rolle']
						];
							
						$this->session->set_userdata( $data );
	
						redirect('admin');
					} else {
						$data = [
							'id' => $user['id'],
							'nama' => $user['nama'],
							'email' => $user['email'],
							'role' => $user['rolle']
						];
							
						$this->session->set_userdata( $data );
	
						redirect('user');
					}
						
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
						Password salah, silahkan hubungi admin</div>');
			
						//Loading View
					redirect('admin/login');
				}
					
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					User tidak ada, silahkan hubungi admin</div>');
			
					//Loading View
				redirect('admin/login');
			}
				
				
		}
		
	}

	public function logout()	
	{
		$this->session->sess_destroy();
		redirect('Admin/login');
	}
	public function pembelian()
	{
		if (!isset($_SESSION)) {
			redirect('admin/login');
			exit();
		} else {
					$data1['user'] = [
						'nama' => $this->session->userdata('nama'),
						'email' => $this->session->userdata('email'),
						'rolle' => $this->session->userdata('role')
					];
					$this->load->model('Pembelian');
					$data['query'] = $this->Pembelian->getdatapembelian();
				
				$this->load->view('admin/tables', $data + $data1);
		}
		
		
	}
	public function penjualan()
	{
		if (!isset($_SESSION)) {
			redirect('admin/login');
			exit();
		} else {
				$data1['user'] = [
					'nama' => $this->session->userdata('nama'),
					'email' => $this->session->userdata('email'),
					'rolle' => $this->session->userdata('role')
				];
				$this->load->model('Pembelian');
				$data['query'] = $this->Pembelian->getdatapembelian();
			
			$this->load->view('admin/tables2', $data + $data1);
		}
		
	}
	public function insertresi()
	{
		$this->load->model('Pembelian','pem',true);
		$data = [
			'resi' => $this->input->post('resi')];
		$no = $this->input->post('no_transaksi');
		$this->pem->inputresi($data,$no);

	}
}
