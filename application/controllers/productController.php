<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductController extends CI_Controller
{
    public function index()
    {
        $this->load->view('themes/header');
		$this->load->view('home/product/product');
		$this->load->view('themes/footer');
    }
} 
