<?php
defined('BASEPATH') or exit('No direct script access allowed');


class clientController extends CI_Controller
{

    public function index()
    {
        $this->load->model('clientModel');
        $data['records'] = $this->clientModel->getClient();

        $this->load->view('themes/header');
        $this->load->view('home/client/client', $data);
        $this->load->view('themes/footer');
    }
}
