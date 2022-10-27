<?php

class hasil_ipak_model extends CI_ModeL
{

    public function fetch_total()
    {
        return $this->db->count_all('t_kuisioner_ipak');
    }

    public function fetch_total_isi($id, $isi)
    {
        $this->db->from('t_kuisioner_ipak');
        $this->db->where('p' . $id, $isi);
        return $this->db->count_all_results();
    }
}
