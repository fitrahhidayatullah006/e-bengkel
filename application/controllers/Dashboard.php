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
        $data['title'] = 'Dashboard';

        $data['layanan'] = $this->Dashboard_model->totalLayanan();
        $data['mekanik'] = $this->Dashboard_model->totalMekanik();
        $data['motor'] = $this->Dashboard_model->totalMotor();
        $data['booking'] = $this->Dashboard_model->totalBooking();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }
}