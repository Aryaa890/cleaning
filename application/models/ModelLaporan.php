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

    public function __construct()
    {
        parent::__construct();
    }

    // Method to fetch all data from the "laporan" table
    public function get_all_laporan()
    {
        // Fetch all rows from the "laporan" table
        $query = $this->db->get('laporan');

        // Check if there are any rows returned
        if ($query->num_rows() > 0) {
            // Return the result set as an array of rows
            return $query->result_array();
        } else {
            // If no rows found, return an empty array
            return array();
        }
    }
}
