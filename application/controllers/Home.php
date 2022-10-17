<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data["tipe"] =  'ipak';
        $this->load->view("home", $data);
    }

    public function ipak()
    {
        $data["tipe"] =  'ipak';
        $this->load->view("home", $data);
    }

    public function ikm()
    {
        $data["tipe"] =  'ikm';
        $this->load->view("home", $data);
    }
}
