<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->model('Layanan_model');
    }

    public function index()
    {
        $data['title']='Data Layanan';
        $data['layanan']=$this->Layanan_model->getAll();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('layanan/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->input->post()){

            $this->Layanan_model->insert();

            redirect('layanan');
        }

        $data['title']='Tambah Layanan';

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('layanan/tambah');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if($this->input->post()){

            $this->Layanan_model->update($id);

            redirect('layanan');
        }

        $data['title']='Edit Layanan';

        $data['layanan']=$this->Layanan_model->getById($id);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('layanan/edit',$data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Layanan_model->delete($id);

        redirect('layanan');
    }

}