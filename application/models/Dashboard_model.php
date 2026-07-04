<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
    public function totalLayanan()
    {
        return $this->db->count_all('layanan');
    }

    public function totalMekanik()
    {
        return $this->db->count_all('mekanik');
    }

    public function totalMotor()
    {
        return $this->db->count_all('motor');
    }

    public function totalBooking()
    {
        return $this->db->count_all('booking');
    }
}