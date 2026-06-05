<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->session->set_flashdata('not-login', 'Gagal!');
        if (!$this->session->userdata('email')) {
            redirect('welcome/guru');
        }
    }

    public function test_confirm()
    {
        $this->load->view('guru/test_confirm');
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
            $video = '';
            if (!empty($_FILES['video']['name'])) {
                $config['allowed_types'] = 'mp4|mkv';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/materi_video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    $video = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error-upload', $this->upload->display_errors('', ''));
                    redirect('guru/add_materi');
                }
            } else {
                $this->session->set_flashdata('error-upload', 'Harap pilih file video materi.');
                redirect('guru/add_materi');
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
            redirect('guru');
        }
    }

    public function data_nilai()
    {
        // die("DEBUG: CONTROLLER GURU/DATA_NILAI TERPANGGIL");
        $data['user'] = $this->db->get_where('guru', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();

        // Get nilai data joined with siswa names
        $this->db->select('nilai.*, siswa.nama');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
        $this->db->order_by('nilai.id', 'DESC');
        $query = $this->db->get();
        $data['nilai'] = $query->result_array();

        // Calculate statistics
        $data['total_nilai'] = count($data['nilai']);

        if ($data['total_nilai'] > 0) {
            $sum = 0;
            $max = 0;
            $min = 100;
            foreach ($data['nilai'] as $n) {
                $val = (int) $n['nilai'];
                $sum += $val;
                if ($val > $max)
                    $max = $val;
                if ($val < $min)
                    $min = $val;
            }
            $data['rata_rata'] = $sum / $data['total_nilai'];
            $data['nilai_tertinggi'] = $max;
            $data['nilai_terendah'] = $min;
        } else {
            $data['rata_rata'] = 0;
            $data['nilai_tertinggi'] = '-';
            $data['nilai_terendah'] = '-';
        }

        // Get siswa list for add form
        $data['siswa'] = $this->db->get('siswa')->result_array();

        $this->load->view('guru/data_nilai', $data);
    }

    public function tambah_nilai()
    {
        $data = [
            'id_siswa' => $this->input->post('id_siswa'),
            'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel', true)),
            'nilai' => $this->input->post('nilai'),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
        ];

        $this->db->insert('nilai', $data);
        $this->session->set_flashdata('success-nilai', 'Berhasil!');
        redirect('guru/data_nilai');
    }

    public function edit_nilai($id)
    {
        $data['user'] = $this->db->get_where('guru', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();

        $this->db->select('nilai.*, siswa.nama');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
        $this->db->where('nilai.id', $id);
        $data['nilai_item'] = $this->db->get()->row_array();

        $data['siswa'] = $this->db->get('siswa')->result_array();

        $this->load->view('guru/edit_nilai', $data);
    }

    public function update_nilai()
    {
        $id = $this->input->post('id');
        $data = [
            'id_siswa' => $this->input->post('id_siswa'),
            'nama_mapel' => htmlspecialchars($this->input->post('nama_mapel', true)),
            'nilai' => $this->input->post('nilai'),
            'semester' => htmlspecialchars($this->input->post('semester', true)),
        ];

        $this->db->where('id', $id);
        $this->db->update('nilai', $data);
        $this->session->set_flashdata('success-nilai', 'Berhasil!');
        redirect('guru/data_nilai');
    }

    public function delete_nilai($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('nilai');
        $this->session->set_flashdata('delete-nilai', 'Berhasil!');
        redirect('guru/data_nilai');
    }

    public function data_materi()
    {
        $data['user'] = $this->db->get_where('guru', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();

        // Get materials uploaded by this teacher
        $this->db->where('nama_guru', $data['user']['nama_guru']);
        $this->db->order_by('id', 'DESC');
        $data['materi'] = $this->db->get('materi')->result_array();

        $this->load->view('guru/data_materi', $data);
    }

    public function edit_materi($id)
    {
        $data['user'] = $this->db->get_where('guru', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();

        $data['materi'] = $this->db->get_where('materi', ['id' => $id])->row_array();

        if (!$data['materi']) {
            show_404();
        }

        $this->load->view('guru/edit_materi', $data);
    }

    public function update_materi()
    {
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim|min_length[1]', [
            'required' => 'Harap isi kolom deskripsi.',
            'min_length' => 'deskripsi terlalu pendek.',
        ]);

        $id = $this->input->post('id');

        if ($this->form_validation->run() == false) {
            $this->edit_materi($id);
        } else {
            $materi = $this->db->get_where('materi', ['id' => $id])->row_array();
            if (!$materi) {
                show_404();
            }

            $video = $materi['video'];
            if (!empty($_FILES['video']['name'])) {
                $config['allowed_types'] = 'mp4|mkv';
                $config['max_size'] = '0';
                $config['upload_path'] = './assets/materi_video';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('video')) {
                    // Delete old video file
                    if (!empty($materi['video']) && file_exists('./assets/materi_video/' . $materi['video'])) {
                        unlink('./assets/materi_video/' . $materi['video']);
                    }
                    $video = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('error-upload', $this->upload->display_errors('', ''));
                    redirect('guru/edit_materi/' . $id);
                }
            }

            $data = [
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'video' => $video,
            ];

            $this->db->where('id', $id);
            $this->db->update('materi', $data);
            $this->session->set_flashdata('success-materi', 'Materi berhasil diperbarui!');
            redirect('guru/data_materi');
        }
    }

    public function delete_materi($id)
    {
        $materi = $this->db->get_where('materi', ['id' => $id])->row_array();
        if ($materi) {
            // Delete video file from server
            if (!empty($materi['video']) && file_exists('./assets/materi_video/' . $materi['video'])) {
                unlink('./assets/materi_video/' . $materi['video']);
            }
            $this->db->where('id', $id);
            $this->db->delete('materi');
            $this->session->set_flashdata('delete-materi', 'Materi berhasil dihapus!');
        }
        redirect('guru/data_materi');
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
}
