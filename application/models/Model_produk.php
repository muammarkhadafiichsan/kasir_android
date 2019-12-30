<?php

class Model_produk extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('produk');
    }
    public function input_produk($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function edit_produk($where, $table)

    {
        return $this->db->get_where($table, $where);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function detail_produk($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->get('produk');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}
