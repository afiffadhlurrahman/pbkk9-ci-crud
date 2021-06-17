<?php defined('BASEPATH') or exit('No direct script access allowed');


class Karyawan_model extends CI_Model
{
    private $_table = "karyawan";

    public $id_kar;
    public $nama_kar;
    public $alamat_kar;
    public $email_kar;
    public $no_telp_kar;

    public function rules()
    {
        return [
            [
                'field' => 'nama_kar',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'alamat_kar',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
            [
                'field' => 'email_kar',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'no_telp_kar',
                'label' => 'No Telp',
                'rules' => 'numeric'
            ],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kar" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kar = uniqid();
        $this->nama_kar = $post["nama_kar"];
        $this->alamat_kar = $post["alamat_kar"];
        $this->email_kar = $post["email_kar"];
        $this->no_telp_kar = $post["no_telp_kar"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kar = $post["id_kar"];
        $this->nama_kar = $post["nama_kar"];
        $this->alamat_kar = $post["alamat_kar"];
        $this->email_kar = $post["email_kar"];
        $this->no_telp_kar = $post["no_telp_kar"];
        return $this->db->update($this->_table, $this, array('id_kar' => $post['id_kar']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kar" => $id));
    }
}
