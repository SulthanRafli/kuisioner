<?php

class input_ipak_model extends CI_ModeL
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('pertanyaan_ipak_model');
    }

    function save()
    {
        $this->db->trans_begin();

        $data['umur'] = $this->input->post('usia');
        $data['jenis_kelamin'] = $this->input->post('jenisKelamin');
        $data['pendidikan'] = $this->input->post('pendidikan');
        $data['pekerjaan'] = $this->input->post('pekerjaan') == 'Lain - Lain' ? $this->input->post('pekerjaanLainnya') : $this->input->post('pekerjaan');
        $data['jenis_layanan'] = $this->input->post('jenisLayanan');
        $data['saran'] = $this->input->post('saran');
        foreach ($this->pertanyaan_ipak_model->fetch_data() as $row) {
            $temp_isi = explode("$", $this->input->post('p' . $row->id));
            $data['p' . $row->id] = $temp_isi[0] == '' ? null : $temp_isi[1];
        }

        $this->db->insert('t_kuisioner_ipak', $data);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
