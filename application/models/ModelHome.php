<?php
class ModelHome extends CI_Model
{
    public function get_all_layanan()
    {
        $query = $this->db->get('layanan');
        return $query->result_array();
    }
}
