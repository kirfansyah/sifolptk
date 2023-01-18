<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_approval extends CI_Model
{
    public $table = 'tb_registrasi';
    public $table2 = 'tb_layanan';
    public $table3 = 'tb_pegawai';

    public function get()
    {
        return $this->db->query("SELECT a.id, a.nama, a.no_hp, a.no_reg, a.tanggal_registrasi, a.keterangan, b.layanan, a.sts_app, c.nama as nama_pegawai FROM tb_registrasi as a 
        LEFT JOIN tb_layanan as b on a.id_layanan = b.id
        LEFT JOIN tb_pegawai as c on a.id_pegawai = c.id
        WHERE a.sts_app = '0'")->result();
    }

    public function get_by_id($id)
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.no_hp, a.no_reg, a.tanggal_registrasi, a.keterangan, b.layanan, a.sts_app, c.nama as nama_pegawai FROM tb_registrasi as a 
        LEFT JOIN tb_layanan as b on a.id_layanan = b.id
        LEFT JOIN tb_pegawai as c on a.id_pegawai = c.id
        WHERE a.sts_app = '0' AND a.id = '$id'")->row();
        return $query;
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
