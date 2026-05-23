<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_absensi extends CI_Model
{
    public function tampil_data()
    {
        // Join dengan tabel siswa untuk mendapatkan nama siswa
        $this->db->select('absensi.*, siswa.nama');
        $this->db->from('absensi');
        $this->db->join('siswa', 'siswa.id = absensi.id_siswa', 'left');
        $this->db->order_by('absensi.tanggal', 'DESC');
        return $this->db->get();
    }

    public function tampil_data_siswa($id_siswa)
    {
        $this->db->select('absensi.*, siswa.nama');
        $this->db->from('absensi');
        $this->db->join('siswa', 'siswa.id = absensi.id_siswa', 'left');
        $this->db->where('absensi.id_siswa', $id_siswa);
        $this->db->order_by('absensi.tanggal', 'DESC');
        return $this->db->get();
    }

    public function tambah_absensi($data)
    {
        return $this->db->insert('absensi', $data);
    }

    public function delete_absensi($where)
    {
        return $this->db->delete('absensi', $where);
    }

    public function update_absensi($where, $data)
    {
        $this->db->where($where);
        return $this->db->update('absensi', $data);
    }

    public function detail_absensi($id)
    {
        $this->db->select('absensi.*, siswa.nama');
        $this->db->from('absensi');
        $this->db->join('siswa', 'siswa.id = absensi.id_siswa', 'left');
        $this->db->where('absensi.id', $id);
        return $this->db->get()->row_array();
    }
}
