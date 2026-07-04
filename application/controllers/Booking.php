<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->model('Booking_model');
    }

    public function index()
    {
        $data['title'] = 'Data Booking';
        $data['booking'] = $this->Booking_model->getAll();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('booking/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->input->post()){

            $this->Booking_model->insert();

            redirect('booking');
        }

        $data['title'] = 'Tambah Booking';
        $data['motor'] = $this->Booking_model->getMotor();
        $data['layanan'] = $this->Booking_model->getLayanan();
        $data['mekanik'] = $this->Booking_model->getMekanik();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('booking/tambah',$data);
        $this->load->view('templates/footer');
    }

    public function edit($id_booking)
    {
        if($this->input->post()){

            $this->Booking_model->update($id_booking);

            redirect('booking');
        }

        $data['title'] = 'Edit Booking';
        $data['booking'] = $this->Booking_model->getById($id_booking);
        $data['motor'] = $this->Booking_model->getMotorEdit($id_booking);
        $data['layanan'] = $this->Booking_model->getLayanan();
        $data['mekanik'] = $this->Booking_model->getMekanikEdit($id_booking);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('booking/edit',$data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_booking)
    {
        $this->Booking_model->delete($id_booking);

        redirect('booking');
    }
}