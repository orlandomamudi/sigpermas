<?php 

class Data_model extends CI_Model{
	// FUNGSI CRUD
	// fungsi untuk mengambil data dari database
	function get_data($table){
		return $this->db->get($table);
	}

	// fungsi untuk menginput data ke database
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	// fungsi untuk mengedit data
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	// fungsi untuk mengupdate atau mengubah data di database
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	// fungsi untuk menghapus data dari database
	function delete_data($where,$table){
		$this->db->delete($table,$where);
	}
	// AKHIR FUNGSI CRUD

	public function getLat()
    {
        $this->db->select('latitude, longitude');
        $this->db->from('data_masjid');
        $this->db->order_by('id_masjid', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }
	public function getLong()
    {
        $this->db->select('longitude');
        $this->db->from('data_masjid');
        $this->db->order_by('id_masjid', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('data_masjid');
		return $this->db->get()->result();
	}

}

?>