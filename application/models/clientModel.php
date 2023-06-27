<?php
defined('BASEPATH') or exit('No direct script access allowed');


class clientModel extends CI_Model
{
    public function getClient()
    {
        $query = $this->db->get('client');
        return $query->result();
    }
}
