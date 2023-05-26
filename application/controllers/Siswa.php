<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function index()
    {
        //load model
        $this->load->model('m_siswa');

        $data = array(
            'data_siswa' => $this->m_siswa->get_siswa()->result()
        );
        //load view
        $this->load->view('data_siswa', $data);
    }

    public function tambah()
    {
        //load view
        $this->load->view('tambah_siswa');
    }

    public function simpan()
    {
        //load model
        $this->load->model('m_siswa');

        //get data dari form
        $nisn             = $this->input->post('nisn');
        $nama_lengkap    = $this->input->post('nama_lengkap');
        $alamat            = $this->input->post('alamat');

        $data = array(
            'nisn'           => $nisn,    
            'nama_lengkap' => $nama_lengkap,
            'alamat'       => $alamat    
        );

        //insert data via model
        $this->m_siswa->simpan_siswa($data);

        //redirect ke controller siswa
        redirect('siswa');

    }
}