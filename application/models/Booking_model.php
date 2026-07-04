<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking_model extends CI_Model
{
    public function getAll()
    {
        return $this->db
            ->select('booking.*, motor.merk, motor.tipe, motor.nomor_polisi,
                      layanan.nama_layanan,
                      mekanik.nama_mekanik')
            ->from('booking')
            ->join('motor','motor.id_motor=booking.id_motor')
            ->join('layanan','layanan.id_layanan=booking.id_layanan')
            ->join('mekanik','mekanik.id_mekanik=booking.id_mekanik')
            ->order_by('id_booking','DESC')
            ->get()
            ->result();
    }

    public function getById($id_booking)
    {
        return $this->db
            ->get_where('booking',[
                'id_booking'=>$id_booking
            ])
            ->row();
    }

    public function getMotor()
{
    $sql = "
        SELECT *
        FROM motor
        WHERE id_motor NOT IN (
            SELECT id_motor
            FROM booking
            WHERE status IN ('Menunggu','Diproses')
        )
        ORDER BY merk ASC
    ";

    return $this->db->query($sql)->result();
}

public function getMotorEdit($id_booking)
{
    $sql = "
        SELECT *
        FROM motor
        WHERE id_motor NOT IN (
            SELECT id_motor
            FROM booking
            WHERE status IN ('Menunggu','Diproses')
            AND id_booking != ?
        )
        ORDER BY merk ASC
    ";

    return $this->db->query($sql, array($id_booking))->result();
}

    public function getLayanan()
    {
        return $this->db
            ->order_by('nama_layanan','ASC')
            ->get('layanan')
            ->result();
    }

    public function getMekanik()
{
    $sql = "
        SELECT *
        FROM mekanik
        WHERE id_mekanik NOT IN (
            SELECT id_mekanik
            FROM booking
            WHERE status IN ('Menunggu','Diproses')
        )
        AND status='Aktif'
        ORDER BY nama_mekanik ASC
    ";

    return $this->db->query($sql)->result();
}

    public function insert()
    {
        $data=array(
            'id_motor'=>$this->input->post('id_motor'),
            'id_layanan'=>$this->input->post('id_layanan'),
            'id_mekanik'=>$this->input->post('id_mekanik'),
            'tanggal_booking'=>$this->input->post('tanggal_booking'),
            'jam_booking'=>$this->input->post('jam_booking'),
            'keluhan'=>$this->input->post('keluhan'),
            'status'=>$this->input->post('status')
        );

        return $this->db->insert('booking',$data);
    }

    public function update($id_booking)
    {
        $data=array(
            'id_motor'=>$this->input->post('id_motor'),
            'id_layanan'=>$this->input->post('id_layanan'),
            'id_mekanik'=>$this->input->post('id_mekanik'),
            'tanggal_booking'=>$this->input->post('tanggal_booking'),
            'jam_booking'=>$this->input->post('jam_booking'),
            'keluhan'=>$this->input->post('keluhan'),
            'status'=>$this->input->post('status')
        );

        $this->db->where('id_booking',$id_booking);

        return $this->db->update('booking',$data);
    }

    public function delete($id_booking)
    {
        $this->db->where('id_booking',$id_booking);

        return $this->db->delete('booking');
    }

    public function getMekanikEdit($id_booking)
{
    $sql = "
        SELECT *
        FROM mekanik
        WHERE id_mekanik NOT IN (
            SELECT id_mekanik
            FROM booking
            WHERE status IN ('Menunggu','Diproses')
            AND id_booking != ?
        )
        AND status='Aktif'
        ORDER BY nama_mekanik ASC
    ";

    return $this->db->query($sql, array($id_booking))->result();
}
}