<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }

        $this->load->model('Dashboard_model');
    }

    public function index()
{
    if(!$this->session->userdata('login')){
        redirect('auth');
    }

    $data['title'] = 'Dashboard';

    $data['total_motor'] = $this->db->count_all('motor');

    $data['total_mekanik'] = $this->db->count_all('mekanik');

    $data['total_layanan'] = $this->db->count_all('layanan');

    $data['total_booking'] = $this->db->count_all('booking');

    $data['booking_menunggu'] = $this->db
        ->where('status','Menunggu')
        ->count_all_results('booking');

    $data['booking_diproses'] = $this->db
        ->where('status','Diproses')
        ->count_all_results('booking');

    $data['booking_selesai'] = $this->db
        ->where('status','Selesai')
        ->count_all_results('booking');

    $this->load->view('templates/header',$data);
    $this->load->view('templates/sidebar');
    $this->load->view('dashboard/index',$data);
    $this->load->view('templates/footer');
}
}