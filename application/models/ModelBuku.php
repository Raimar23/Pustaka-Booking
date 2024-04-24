<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model
{

    // ** Book Management **

    public function getBooks()
    {
        return $this->db->get('buku')->result();
    }

    public function getBook($where = null)
    {
        return $this->db->get_where('buku', $where)->row();
    }

    public function saveBook($data = null)
    {
        $this->db->insert('buku', $data);
        return $this->db->affected_rows() > 0;
    }

    public function updateBook($data = null, $where = null)
    {
        $this->db->update('buku', $data, $where);
        return $this->db->affected_rows() > 0;
    }

    public function deleteBook($where = null)
    {
        $this->db->delete('buku', $where);
        return $this->db->affected_rows() > 0;
    }

    public function getTotal($field, $where = null)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('buku');
        return $this->db->get()->row()->$field;
    }

    // ** Category Management **

    public function getCategories()
    {
        return $this->db->get('kategori')->result();
    }

    public function getCategory($where = null)
    {
        return $this->db->get_where('kategori', $where)->row();
    }

    public function saveCategory($data = null)
    {
        $this->db->insert('kategori', $data);
        return $this->db->affected_rows() > 0;
    }

    public function deleteCategory($where = null)
    {
        $this->db->delete('kategori', $where);
        return $this->db->affected_rows() > 0;
    }

    public function updateCategory($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
        return $this->db->affected_rows() > 0;
    }

    // ** Join Operations **

    public function joinCategoryBook($where = null)
    {
        $this->db->select('buku.id_kategori, kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get()->result();
    }
}
