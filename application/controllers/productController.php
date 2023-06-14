<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends CI_Controller
{
    public function index()
    {
        $this->load->model('productModel');

        $this->load->view('themes/header');
        $data['produts'] = $this->productModel->getProduct();
        $this->load->view('home/product/product', $data);
        $this->load->view('themes/footer');
    }

    public function store()
    {
        $letters = "PRD";
        $matricule = substr(uniqid(), 0, 10);

        $data =
            [
                'uid' => $letters . $matricule,
                'name' => $this->input->post('name'),
                'qty' => $this->input->post('qty'),
                'price' => $this->input->post('price'),
                'deliver' => $this->input->post('deliver')
            ];

        $this->load->model('productModel');
        $this->productModel->insertProduct($data);
        $this->session->set_flashdata('status', 'Record has been added');
        redirect(base_url('product'));
    }
}
