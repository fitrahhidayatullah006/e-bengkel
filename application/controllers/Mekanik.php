<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mekanik extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('login')){
            redirect('auth');
        }

        $this->load->model('Mekanik_model');
    }

    public function index()
    {
        $data['title']='Data Mekanik';
        $data['mekanik']=$this->Mekanik_model->getAll();

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('mekanik/index',$data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        if($this->input->post()){

            $this->Mekanik_model->insert();

            redirect('mekanik');
        }

        $data['title']='Tambah Mekanik';

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('mekanik/tambah');
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        if($this->input->post()){

            $this->Mekanik_model->update($id);

            redirect('mekanik');
        }

        $data['title']='Edit Mekanik';
        $data['mekanik']=$this->Mekanik_model->getById($id);

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('mekanik/edit',$data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Mekanik_model->delete($id);

        redirect('mekanik');
    }

}