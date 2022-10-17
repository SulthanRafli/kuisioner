<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('input_model');
    }

    public function index()
    {
        $this->load->model("input_model");

        $data2["fetch_data"] = $this->input_model->fetch_data('ipak');
        $data2["tipe"] = 'ipak';

        $this->load->view("input", $data2);
    }

    public function ipak()
    {
        $this->load->model("input_model");

        $data2["fetch_data"] = $this->input_model->fetch_data('ipak');
        $data2["tipe"] = 'ipak';

        $this->load->view("input", $data2);
    }

    public function ikm()
    {
        $this->load->model("input_model");

        $data2["fetch_data"] = $this->input_model->fetch_data('ikm');
        $data2["tipe"] = 'ikm';

        $this->load->view("input", $data2);
    }

    public function Berhasil($tipe)
    {
        $data["tipe"] = $tipe;

        $this->load->view("berhasil", $data);
    }

    public function save_kuisioner($tipe)
    {
        $result     = $this->input_model->save($tipe);
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }
}
