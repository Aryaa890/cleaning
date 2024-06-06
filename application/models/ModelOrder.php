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

    public function getOrderById($id)
    {
        return $this->db->get_where('order_masuk', ['id' => $id])->row_array();
    }

    public function updateOrder($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('order_masuk', $data);
    }

    public function deleteorder($id)
    {
        return $this->db->delete('order_masuk', ['id' => $id]);
    }
}
