<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->model('pembelian');
	}
	
	public function index()
	{
		if (!isset($_SESSION)) {
			redirect('login');
			exit();
		} else {
			$data['user'] = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email'),
				'rolle' => $this->session->userdata('role')
			];
			$this->load->view('user/index-admin',$data);
		}
		
	}
	public function logout()	
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	public function pembelian()
	{
		if (!isset($_SESSION)) {
			redirect('login');
			exit();
		} else {
				$data1['user'] = [
					'nama' => $this->session->userdata('nama'),
					'email' => $this->session->userdata('email'),
					'rolle' => $this->session->userdata('role')
				];
				$id = $this->session->userdata('id');
				
				$this->load->model('Pembelian');
				$data['query'] = $this->Pembelian->Getdatapembelianuser($id);
			
				$this->load->view('user/tables', $data + $data1);
		}
		
		
	}
	public function history()
	{
		if (!isset($_SESSION)) {
			redirect('login');
			exit();
		} else {
					$data1['user'] = [
						'nama' => $this->session->userdata('nama'),
						'email' => $this->session->userdata('email'),
						'rolle' => $this->session->userdata('role')
					];
					$id = $this->session->userdata('id');
					
					$this->load->model('Pembelian');
					$data['query'] = $this->Pembelian->Getdatapembelianuser($id);
				
					$this->load->view('user/tables2', $data + $data1);
		}
		
	}
	
}
