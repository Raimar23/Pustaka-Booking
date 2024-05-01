<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dlema extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('siswa_model');
    }

    public function input_data() {
        $this->load->view('input_data');
    }

    public function proses_input() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        );
        
        $this->siswa_model->input_data($data);
        redirect('dlema/hasil_input');
    }

    public function hasil_input() {
        $data['siswa'] = $this->Siswa_model->get_latest_siswa();
        $this->load->view('hasil_input', $data);
    }
}
?>
