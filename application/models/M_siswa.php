<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

    public function get_siswa()
    {
        //select semua data siswa
        $this->db->select('*');
        $this->db->from('tbl_siswa');
        $this->db->order_by('id_siswa', 'DESC');
        return $this->db->get();
    }
}