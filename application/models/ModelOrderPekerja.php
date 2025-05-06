<?php
class ModelOrderPekerja extends CI_Model
{
    public function diambil($id, $additional_data)
    {
        // Fetch the specific row from order_pending based on the ID
        $this->db->where('id', $id);
        $q = $this->db->get('order_pending')->row_array();

        if ($q) {
            // Merge additional data with the fetched row data
            $data = array_merge($q, $additional_data);

            // Insert the merged data into order_diambil table
            $this->db->insert('order_diambil', $data);

            // Remove the specific row from the source table after successful insertion
            $this->db->where('id', $id);
            $this->db->delete('order_pending');
        }
    }
}
