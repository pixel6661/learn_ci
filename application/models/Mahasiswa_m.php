<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_m extends CI_Model {

    public function insertDataMahasiswa($post = array()) {

        $param = [
            'nama_mhs' => $post['nama_mhs'],
            'jenis_kelamin' => $post['jenis_kelamin'],
            'jurusan' => $post['jurusan_mhs'],
            'email' => $post['email_mhs']
        ];
    
        $this->db->insert('mahasiswa', $param);
    }

    public function getDataMahasiswa() {
        $query = $this->db->select('*')
            ->from('mahasiswa')->order_by('id', 'desc')->get()->result();

        return $query;
    }

    public function deleteDataMahasiswa($id) {
        
        $this->db->delete('mahasiswa', array('id' => $id));
    }
}