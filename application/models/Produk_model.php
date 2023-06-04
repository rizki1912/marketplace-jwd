<?php
class Produk_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
    // Mendapatkan semua data produk
    public function get_all_produk()
    {
        return $this->db->get('produk')->result_array();
    }
    
    // Menyimpan data produk baru
    public function create_produk($data)
    {
        $this->db->insert('produk', $data);
        return $this->db->insert_id();
    }
    
    // Mendapatkan data produk berdasarkan id_produk
    public function get_produk_by_id($id)
    {
        return $this->db->get_where('produk', array('id_produk' => $id))->row_array();
    }
    
    // Mengupdate data produk berdasarkan id_produk
    public function update_produk($id, $data)
    {
        $this->db->where('id_produk', $id);
        return $this->db->update('produk', $data);
    }
    
    // Menghapus data produk berdasarkan id_produk
    public function delete_produk($id)
    {
        $this->db->where('id_produk', $id);
        return $this->db->delete('produk');
    }
}
?>
