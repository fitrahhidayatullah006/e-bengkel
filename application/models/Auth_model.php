<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($username)
    {
        return $this->db
                    ->where('username', $username)
                    ->limit(1)
                    ->get('users')
                    ->row();
    }

    public function getById($id)
    {
        return $this->db
                    ->where('id_user', $id)
                    ->get('users')
                    ->row();
    }

}