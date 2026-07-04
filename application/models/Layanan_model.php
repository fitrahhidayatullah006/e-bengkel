<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('layanan')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('layanan',[
            'id_layanan'=>$id
        ])->row();
    }

    public function insert()
    {
        $data=array(

            'nama_layanan'=>$this->input->post('nama_layanan'),

            'harga'=>$this->input->post('harga')

        );

        $this->db->insert('layanan',$data);
    }

    public function update($id)
    {
        $data=array(

            'nama_layanan'=>$this->input->post('nama_layanan'),

            'harga'=>$this->input->post('harga')

        );

        $this->db->where('id_layanan',$id);

        $this->db->update('layanan',$data);
    }

    public function delete($id)
    {
        $this->db->where('id_layanan',$id);

        $this->db->delete('layanan');
    }

}