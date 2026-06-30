<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('welcome');
        }
    }

    public function index()
    {
        $data['kelas'] = ['X', 'XI', 'XII'];
        $this->load->view('kelas/index', $data);
        $this->load->view('template/footer');
    }
}