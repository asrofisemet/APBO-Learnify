<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        if (!$this->session->userdata('email')) {
            $this->session->set_flashdata('not-login', 'Gagal!');
            redirect('welcome/guru');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('guru', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();

        $this->load->view('guru/index');
    }

    public function add_materi()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('guru/add_materi');
        } else {
            $upload_video = $_FILES['video'];

            if ($upload_video) {
                $config['allowed_types'] = 'mp4|mkv';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/materi_video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                } else {
                    $this->upload->display_errors();
                }
            }
            $data = [
                'nama_guru' => htmlspecialchars($this->input->post('nama_guru', true)),
                'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel', true)),
                'video' => $video,
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
            ];

            $this->db->insert('materi', $data);
            $this->session->set_flashdata('success-reg', 'Berhasil!');
            redirect(base_url('index.php/guru'));
        }
    }

    private function _uploadImage()
    {
        $config['upload_path'] = './assets/materi_video';
        $config['allowed_types'] = 'mp4|mkv';
        $config['file_name'] = $this->product_id;
        $config['overwrite'] = true;
        $config['max_size'] = 0; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.mp4";
    }

    // Manajemen Absensi
    public function data_absensi()
    {
        $this->load->model('m_absensi');
        $data['user'] = $this->db->get_where('guru', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['absensi'] = $this->m_absensi->tampil_data()->result();
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('guru/data_absensi', $data);
    }

    public function tambah_absensi()
    {
        $this->load->model('m_absensi');

        $id_siswa = $this->input->post('id_siswa');
        $tanggal = $this->input->post('tanggal');
        $status = $this->input->post('status');

        $data = [
            'id_siswa' => $id_siswa,
            'tanggal' => $tanggal,
            'status' => $status,
        ];

        $this->m_absensi->tambah_absensi($data);
        $this->session->set_flashdata('success-reg', 'Data absensi berhasil ditambahkan!');
        redirect('guru/data_absensi');
    }

    public function delete_absensi($id)
    {
        $this->load->model('m_absensi');
        $where = array('id' => $id);
        $this->m_absensi->delete_absensi($where);
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('guru/data_absensi');
    }

    public function update_absensi($id)
    {
        $this->load->model('m_absensi');
        $data['detail'] = $this->m_absensi->detail_absensi($id);
        $data['siswa'] = $this->db->get('siswa')->result();
        $data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('guru/update_absensi', $data);
    }

    public function absensi_edit()
    {
        $this->load->model('m_absensi');

        $id = $this->input->post('id');
        $id_siswa = $this->input->post('id_siswa');
        $tanggal = $this->input->post('tanggal');
        $status = $this->input->post('status');

        $data = [
            'id_siswa' => $id_siswa,
            'tanggal' => $tanggal,
            'status' => $status,
        ];

        $where = ['id' => $id];
        $this->m_absensi->update_absensi($where, $data);
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('guru/data_absensi');
    }

    // Manajemen Nilai
    public function data_nilai()
    {
        $this->load->model('m_nilai');
        $data['user'] = $this->db->get_where('guru', [
            'email' => $this->session->userdata('email')
        ])->row_array();
        $data['nilai'] = $this->m_nilai->tampil_data()->result();
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('guru/data_nilai', $data);
    }

    public function tambah_nilai()
    {
        $this->load->model('m_nilai');

        $id_siswa = $this->input->post('id_siswa');
        $nama_mapel = $this->input->post('nama_mapel');
        $nilai = $this->input->post('nilai');
        $semester = $this->input->post('semester');

        $data = [
            'id_siswa' => $id_siswa,
            'nama_mapel' => $nama_mapel,
            'nilai' => $nilai,
            'semester' => $semester,
        ];

        $this->m_nilai->tambah_nilai($data);
        $this->session->set_flashdata('success-reg', 'Data nilai berhasil ditambahkan!');
        redirect('guru/data_nilai');
    }

    public function delete_nilai($id)
    {
        $this->load->model('m_nilai');
        $where = array('id' => $id);
        $this->m_nilai->delete_nilai($where);
        $this->session->set_flashdata('user-delete', 'berhasil');
        redirect('guru/data_nilai');
    }

    public function update_nilai($id)
    {
        $this->load->model('m_nilai');
        $data['user'] = $this->db->get_where('guru', ['email' => $this->session->userdata('email')])->row_array();
        $data['detail'] = $this->m_nilai->detail_nilai($id);
        $data['siswa'] = $this->db->get('siswa')->result();
        $this->load->view('guru/update_nilai', $data);
    }

    public function nilai_edit()
    {
        $this->load->model('m_nilai');

        $id = $this->input->post('id');
        $id_siswa = $this->input->post('id_siswa');
        $nama_mapel = $this->input->post('nama_mapel');
        $nilai = $this->input->post('nilai');
        $semester = $this->input->post('semester');

        $data = [
            'id_siswa' => $id_siswa,
            'nama_mapel' => $nama_mapel,
            'nilai' => $nilai,
            'semester' => $semester,
        ];

        $where = ['id' => $id];
        $this->m_nilai->update_nilai($where, $data);
        $this->session->set_flashdata('success-edit', 'berhasil');
        redirect('guru/data_nilai');
    }
}
