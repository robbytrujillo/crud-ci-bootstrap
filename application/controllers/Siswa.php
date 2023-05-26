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
}