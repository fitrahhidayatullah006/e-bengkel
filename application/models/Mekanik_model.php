<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mekanik_model extends CI_Model{

    public function getAll()
    {
        return $this->db->get('mekanik')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('mekanik',[
            'id_mekanik'=>$id
        ])->row();
    }

    public function insert()
    {
        $this->db->insert('mekanik',[
            'nama_mekanik'=>$this->input->post('nama_mekanik'),
            'no_hp'=>$this->input->post('no_hp'),
            'alamat'=>$this->input->post('alamat')
        ]);
    }

    public function update($id)
    {
        $this->db->where('id_mekanik',$id);

        $this->db->update('mekanik',[
            'nama_mekanik'=>$this->input->post('nama_mekanik'),
            'no_hp'=>$this->input->post('no_hp'),
            'alamat'=>$this->input->post('alamat')
        ]);
    }

    public function delete($id)
    {
        $this->db->delete('mekanik',[
            'id_mekanik'=>$id
        ]);
    }

}