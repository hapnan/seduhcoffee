<?php
class Pembelian extends CI_Model{
	public function Getdatapembelian()
	{
		$this->db->select('*');
		$this->db->from('user_history');
		$this->db->join('user','user_history.user_id=user.id');
		$this->db->join('produk','user_history.product_id=produk.id');
		$query = $this->db->get();
		$data = $query->result_array();

		return $data;
	}
	public function Getdatapembelianuser($id)
	{
		$this->db->select('*');
		$this->db->from('user_history');
		$this->db->join('user','user_history.user_id=user.id');
		$this->db->join('produk','user_history.product_id=produk.id');
		$this->db->where('user_id', $id);
		$query = $this->db->get();
		$data = $query->result_array();

		return $data;
	}
	public function inputresi($data, $no)
	{
		$this->db->where('no_transaksi', $no);
		$this->db->update('user_history',$data);
		
		// $this->db->replace('user_history',$data);
		return true;
	}
}
