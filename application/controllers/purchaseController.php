<?php
defined('BASEPATH') or exit('No direct script access allowed');


class purchaseController extends CI_Controller
{
    public function index()
    {
        $this->load->model('purchaseModel');
        $data['records'] = $this->purchaseModel->getPurchase();

        $this->load->view('themes/header');
        $this->load->view('home/purchase/purcahse', $data);
        $this->load->view('themes/footer');
    }
}
