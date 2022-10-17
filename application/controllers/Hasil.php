<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('hasil_model');
        $this->load->model('pertanyaan_model');
    }

    public function index($id_pertanyaan = 1)
    {
        $this->load->model("hasil_model");

        $pertanyaan              =  $this->pertanyaan_model->fetch_by_id($id_pertanyaan);

        $data["pertanyaan"]      =  $pertanyaan;
        $data["tipe"]            =  'ipak';
        $data["list_pertanyaan"] =  $this->pertanyaan_model->fetch_data('ipak');
        $data["total"]           =  $this->hasil_model->fetch_total($id_pertanyaan);
        $data["total_isi1"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi1);
        $data["total_isi2"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi2);
        $data["total_isi3"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi3);
        $data["total_isi4"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi4);

        $this->load->view("hasil", $data);
    }

    public function ipak($id_pertanyaan = 1)
    {
        $this->load->model("hasil_model");

        $pertanyaan              =  $this->pertanyaan_model->fetch_by_id($id_pertanyaan);

        $data["pertanyaan"]      =  $pertanyaan;
        $data["tipe"]            =  'ipak';
        $data["list_pertanyaan"] =  $this->pertanyaan_model->fetch_data('ipak');
        $data["total"]           =  $this->hasil_model->fetch_total($id_pertanyaan);
        $data["total_isi1"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi1);
        $data["total_isi2"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi2);
        $data["total_isi3"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi3);
        $data["total_isi4"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi4);

        $this->load->view("hasil", $data);
    }

    public function ikm($id_pertanyaan = 1)
    {
        $this->load->model("hasil_model");

        $pertanyaan              =  $this->pertanyaan_model->fetch_by_id($id_pertanyaan);

        $data["pertanyaan"]      =  $pertanyaan;
        $data["tipe"]            =  'ikm';
        $data["list_pertanyaan"] =  $this->pertanyaan_model->fetch_data('ikm');
        $data["total"]           =  $this->hasil_model->fetch_total($id_pertanyaan);
        $data["total_isi1"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi1);
        $data["total_isi2"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi2);
        $data["total_isi3"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi3);
        $data["total_isi4"]      =  $this->hasil_model->fetch_total_isi($id_pertanyaan, $pertanyaan->isi4);

        $this->load->view("hasil", $data);
    }
}
