<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_nilai extends CI_Model
{
    public function tampil_data()
    {
        $this->db->select('nilai.*, siswa.nama');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
        $this->db->order_by('nilai.id', 'DESC');
        return $this->db->get();
    }

    public function tampil_data_siswa($id_siswa)
    {
        $this->db->select('nilai.*, siswa.nama');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
        $this->db->where('nilai.id_siswa', $id_siswa);
        $this->db->order_by('nilai.id', 'DESC');
        return $this->db->get();
    }

    public function tambah_nilai($data)
    {
        return $this->db->insert('nilai', $data);
    }

    public function delete_nilai($where)
    {
        return $this->db->delete('nilai', $where);
    }

    public function update_nilai($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('nilai', $data);
    }

    public function detail_nilai($id)
    {
        $this->db->select('nilai.*, siswa.nama');
        $this->db->from('nilai');
        $this->db->join('siswa', 'siswa.id = nilai.id_siswa', 'left');
        $this->db->where('nilai.id', $id);
        return $this->db->get()->row_array();
    }
}
