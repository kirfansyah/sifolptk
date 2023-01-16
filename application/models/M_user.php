<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public $table = 'user';
    public $table2 = 'user_role';

    public function get()
    {
        return $this->db->get($this->table)->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function get_role()
    {
        return $this->db->get($this->table2)->result();
    }

    public function update($data, $id)
    {
        $this->db->where(['id' => $id]);
        $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        $this->db->delete($this->table, "id='$id'");
    }

    public function tambahdata($data, $table)
    {
        $this->db->insert($table, $data);
    }



    public function hapus_data($where, $table, $id)
    {
        $this->db->query('delete from tb_data_panen where id_wilayah = ' . $id . '');
    }

    public function tambah_cen($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function get_entries()
    {
        $query = $this->db->get('tb_data_panen');
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }

    public function joinTabel($table, $table2, $on)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $on);
        // $this->db->where($where);
        $query = $this->db->get();
        return $query;
    }
} //end class M_user
