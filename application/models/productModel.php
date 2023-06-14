<?php
defined('BASEPATH') or exit('No direct script access allowed');


class productModel extends CI_Model
{
    public function getProduct()
    {
        $query = $this->db->get('product');
        return $query->result();
    }
}
