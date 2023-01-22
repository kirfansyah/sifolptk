<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pegawai extends CI_Model
{
    public $table = 'tb_pegawai';
    public $table2 = 'user_role';

    public function get()
    {
        // return $this->db->get($this->table)->result();
        return $this->db->query("SELECT *, (SELECT AVG(rating) as avg_rate FROM tb_rating where id_pegawai = a.id) as avg_rating FROM tb_pegawai as a")->result();
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
} //end class M_pegawai
