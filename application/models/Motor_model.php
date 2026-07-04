<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor_model extends CI_Model
{
    // Menampilkan semua data motor beserta nama pemilik
    public function getAll()
{
    return $this->db
        ->order_by('id_motor', 'DESC')
        ->get('motor')
        ->result();
}

    // Menampilkan data berdasarkan id
    public function getById($id_motor)
    {
        return $this->db
            ->get_where('motor', array(
                'id_motor' => $id_motor
            ))
            ->row();
    }

    // Simpan data
    public function insert()
{
    $data = array(
        'id_user' => $this->session->userdata('id_user'),
        'merk' => $this->input->post('merk'),
        'tipe' => $this->input->post('tipe'),
        'tahun' => $this->input->post('tahun'),
        'nomor_polisi' => strtoupper($this->input->post('nomor_polisi'))
    );

    return $this->db->insert('motor', $data);
}

    // Update data
    public function update($id_motor)
{
    $data = array(
        'merk' => $this->input->post('merk'),
        'tipe' => $this->input->post('tipe'),
        'tahun' => $this->input->post('tahun'),
        'nomor_polisi' => strtoupper($this->input->post('nomor_polisi'))
    );

    $this->db->where('id_motor', $id_motor);

    return $this->db->update('motor', $data);
}
    // Hapus data
    public function delete($id_motor)
    {
        $this->db->where('id_motor', $id_motor);

        return $this->db->delete('motor');
    }
}