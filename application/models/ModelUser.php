<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    public function saveUser($data = null)
    {
        $this->db->insert('user', $data);
        return $this->db->affected_rows() > 0;
    }

    public function getUser($where = null)
    {
        $this->db->select('*');
        $this->db->from('user');

        if (is_array($where)) {
            $this->db->where($where);
        } else if (is_numeric($where)) {
            $this->db->where('id', $where);
        } else {
        }

        $query = $this->db->get();

        return $query->row();
    }

    public function getUsers($where = null, $limit = 10, $offset = 0)
    {
        $this->db->select('*');
        $this->db->from('user');

        if (is_array($where)) {
            $this->db->where($where);
        } else if (is_numeric($where)) {
            $this->db->where('id', $where);
        }

        $this->db->limit($limit, $offset);

        $query = $this->db->get();

        return $query->result();
    }

    public function checkUserAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);

        $query = $this->db->get();

        return $query->result();
    }
}
