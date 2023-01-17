<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_registrasi extends CI_Model
{
    public $table = 'tb_registrasi';
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

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function get_max_id()
    {
        return $this->db->query("SELECT MAX(id) as id FROM " . $this->table . "")->result();
    }
} 
//end class M_registrasi
