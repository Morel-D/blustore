<?php
defined('BASEPATH') or exit('No direct script access allowed');


class productModel extends CI_Model
{
    public function getProduct()
    {
        $query = $this->db->get('product');
        return $query->result();
    }

    public function insertProduct($data)
    {
        return $this->db->insert('product', $data);
    }

    public function deleteProduct($id)
    {
        return $this->db->delete('product', ['id' => $id]);
    }

    public function updateProduct($id, $data)
    {
        return $this->db->update('product', $data, ['id' => $id]);
    }
}
