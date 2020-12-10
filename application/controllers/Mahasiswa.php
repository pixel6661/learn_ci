<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Mahasiswa_m');
    }

    public function index() {

        $data = [
            'mhs' => $this->Mahasiswa_m->getDataMahasiswa()
        ];
        $this->load->view('list_mahasiswa', $data);
    }

    public function tambah_mahasiswa() {

        $post = $this->input->post(null, true);
        
        if(isset($post['submit'])) {
            
            $this->Mahasiswa_m->insertDataMahasiswa($post);
            redirect('mahasiswa');
            
        }
        $this->load->view('tambah_mahasiswa');
    }

    public function hapus_mahasiswa($iddayan) {

        $this->Mahasiswa_m->deleteDataMahasiswa($iddayan);
        redirect('mahasiswa');
    }
}