<?php
defined('BASEPATH') or exit('No direct script access allowed');


class purchaseModel extends CI_Model
{
    public function getPurchase()
    {
        $this->db->select('*');
        $this->db->from('client');
        $this->db->join('purchase', 'client.client_id = purchase.client_id');
        $query = $this->db->get();

        return $query->result();
    }
}
