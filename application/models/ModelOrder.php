<?php
class ModelOrder extends CI_Model
{
    public function hapusOrderanMasuk($where = null)
    {
        $this->db->delete('order_masuk', $where);
    }
}
