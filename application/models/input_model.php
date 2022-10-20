<?php

class input_model extends CI_ModeL
{
    public function fetch_data($tipe)
    {
        $query = $this->db->query("SELECT * FROM t_pertanyaan WHERE tipe = '$tipe' ORDER BY id ASC");
        return $query;
    }

    function save($tipe)
    {
        $this->db->trans_begin();

        $data['umur'] = $this->input->post('usia');
        $data['jenis_kelamin'] = $this->input->post('jenisKelamin');
        $data['pendidikan'] = $this->input->post('pendidikan');
        $data['pekerjaan'] = $this->input->post('pekerjaan') == 'Lain - Lain' ? $this->input->post('pekerjaanLainnya') : $this->input->post('pekerjaan');
        $data['jenis_layanan'] = $this->input->post('jenisLayanan');
        $data['saran'] = $this->input->post('saran');

        $this->db->insert('t_kuisioner', $data);

        $idKuisioner  = $this->db->insert_id();
        $batch_array    = array();
        foreach ($this->fetch_data($tipe)->result() as $row) {
            $temp_isi = explode("$", $this->input->post('p' . $row->id));
            $data_detail['isi'] = $temp_isi[0] == '' ? null : $temp_isi[1];
            $data_detail['id_pertanyaan'] =  $row->id;
            $data_detail['id_kuisioner'] = $idKuisioner;
            $batch_array[] = $data_detail;
        }

        $this->db->insert_batch('t_detail_kuisioner', $batch_array);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            return FALSE;
        } else {
            $this->db->trans_commit();
            return TRUE;
        }
    }
}
