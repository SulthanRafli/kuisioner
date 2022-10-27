<?php

class pertanyaan_ikm_model extends CI_ModeL
{
    public function fetch_data()
    {
        $query = $this->db->query("SELECT * FROM t_pertanyaan_ikm ORDER BY id ASC");
        return $query->result();
    }

    public function fetch_by_id($id)
    {
        $query = $this->db->query("SELECT * FROM t_pertanyaan_ikm WHERE id = '$id' ORDER BY id ASC");
        return $query->row();
    }
}
