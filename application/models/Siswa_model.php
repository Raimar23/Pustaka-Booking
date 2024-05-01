<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function input_data($data) {
        $this->db->insert('siswa', $data);
    }

    public function get_latest_siswa() {
        $this->db->order_by('id', 'DESC'); // Mengurutkan berdasarkan id secara descending
        $this->db->limit(1); // Mengambil hanya satu baris data terbaru
        $query = $this->db->get('siswa');
        return $query->row_array(); // Mengembalikan hasil dalam bentuk array
    }
    

}
?>
