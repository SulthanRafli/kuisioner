<?php

class pertanyaan_model extends CI_ModeL
{
    public function fetch_data($tipe)
    {
        $query = $this->db->query("SELECT * FROM t_pertanyaan WHERE tipe = '$tipe' ORDER BY id ASC");
        return $query->result();
    }

    public function fetch_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM t_pertanyaan WHERE id = '$id' ORDER BY id ASC");
        return $query->row();
    }
}
