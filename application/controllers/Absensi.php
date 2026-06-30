<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('welcome');
        }
        $this->load->model('m_absensi');
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $user = $this->db->get_where('siswa', ['email' => $email])->row_array();

        $data['user'] = $user;
        $data['absensi'] = $this->m_absensi->tampil_data_siswa($user['id'])->result();

        $this->load->view('template/nav_user', $data);
        $this->load->view('absensi/index', $data);
        $this->load->view('template/footer');
    }
}