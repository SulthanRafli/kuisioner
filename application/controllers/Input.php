<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Input extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('pertanyaan_ikm_model');
        $this->load->model('input_ikm_model');
        $this->load->model('pertanyaan_ipak_model');
        $this->load->model('input_ipak_model');
    }

    public function index()
    {        
        $data2["fetch_data"] = $this->pertanyaan_ipak_model->fetch_data();
        $data2["tipe"] = 'ipak';

        $this->load->view("input", $data2);
    }

    public function ipak()
    {        
        $data2["fetch_data"] = $this->pertanyaan_ipak_model->fetch_data();
        $data2["tipe"] = 'ipak';

        $this->load->view("input", $data2);
    }

    public function ikm()
    {        
        $data2["fetch_data"] = $this->pertanyaan_ikm_model->fetch_data();
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
        $result     = $tipe == 'ipak' ? $this->input_ipak_model->save() : $this->input_ikm_model->save();
        $status     = $result;

        echo json_encode(array(
            'status' => $status,
        ));
        return;
    }
}
