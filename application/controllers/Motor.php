<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('login')) {
            redirect('auth');
        }

        $this->load->model('Motor_model');
    }

    public function index()
    {
        $data['title'] = 'Data Motor';
        $data['motor'] = $this->Motor_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('motor/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->input->post()) {

            $this->Motor_model->insert();

            redirect('motor');
        }

        $data['title'] = 'Tambah Motor';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('motor/tambah');
        $this->load->view('templates/footer');
    }

    public function edit($id_motor)
    {
        if ($this->input->post()) {

            $this->Motor_model->update($id_motor);

            redirect('motor');
        }

        $data['title'] = 'Edit Motor';
        $data['motor'] = $this->Motor_model->getById($id_motor);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('motor/edit', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_motor)
    {
        $this->Motor_model->delete($id_motor);

        redirect('motor');
    }
}