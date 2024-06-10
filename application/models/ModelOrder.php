<?php
class ModelOrder extends CI_Model
{
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('order_masuk');
    }

    public function lanjut($id)
    {
        // Fetch the specific row from order_masuk based on the ID
        $this->db->where('id', $id);
        $q = $this->db->get('order_masuk')->row_array();

        if ($q) {
            // Insert the fetched row into order_pending
            $this->db->insert('order_pending', $q);

            // Remove the row from the source table after successful insertion
            $this->db->where('id', $id);
            $this->db->delete('order_masuk');
        }
    }

    public function getAllOrders()
    {
        $query = $this->db->get('order_masuk');
        return $query->result(); // Returns an array of objects
    }

    public function updateOrder($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('order_masuk', $data);
    }

    public function deleteOrder($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('order_masuk');
    }
    public function get_count()
    {
        return $this->db->count_all('order_masuk');
    }

    public function get_pending_count()
    {
        return $this->db->count_all('order_pending');
    }

    public function get_diambil_count()
    {
        return $this->db->count_all('order_diambil');
    }

    public function get_laporan_count()
    {
        return $this->db->count_all('laporan');
    }
}
