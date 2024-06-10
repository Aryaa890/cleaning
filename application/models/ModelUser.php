<?php

class ModelUser extends CI_Model
{
    public function tambahUser($data)
    {
        return $this->db->insert('user', $data);
    }

    public function deleteUser($id)
    {
        return $this->db->delete('user', ['id' => $id]);
    }
    public function update_user($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }

    public function get_user_by_id($id)
    {
        // Query the database to get user data by ID
        $query = $this->db->get_where('user', array('id' => $id));

        // Check if a user with the specified ID exists
        if ($query->num_rows() > 0) {
            // Return the user data as an associative array
            return $query->row_array();
        } else {
            // Return false if no user found with the specified ID
            return false;
        }
    }
}
