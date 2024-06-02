<?php
class ModelLaporan extends CI_Model
{
    public function laporan($id)
    {
        // Fetch the specific row from order_diambil based on the ID
        $this->db->where('id', $id);
        $q = $this->db->get('order_diambil')->row_array();

        if ($q) {
            // Insert the fetched row into laporan table
            $this->db->insert('laporan', $q);

            // Remove the row from the order_diambil table after successful insertion
            $this->db->where('id', $id);
            $this->db->delete('order_diambil');
        }
    }
}
