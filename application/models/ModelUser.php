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
}