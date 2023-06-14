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
}
