<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_kota extends CI_Model
{

    private $_table = "kota";
    public $id_kota;
    public $nama_kota;


    public function rules()
    {
        return [
            [
                'field' => 'id_kota',
                'label' => 'id_kota',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_kota)
    {
        return $this->db->get_where($this->_table, ["id_kota" => $id_kota])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_kota = $post["nama_kota"];

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        // var_dump($post);
        $this->id_kota = $post["id_kota"];
        $this->nama_kota = $post["nama_kota"];

        $this->db->update($this->_table, $this, array("id_kota" => $post["id_kota"]));
    }

    public function delete($id_kota)
    {
        // $this->_deleteImage($id_kota);
        return $this->db->delete($this->_table, array("id_kota" => $id_kota));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './foto/user';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->nama_kota;
    //     $config['overwrite']            = true;
    //     $config['max_size']             = 1024; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('foto')) {
    //         return $this->upload->data("file_name");
    //     }

    //     return "default.jpg";
    // }

    // private function _deleteImage($id_kota)
    // {
    //     $img = $this->getById($id_kota);
    //     if ($img->foto != "default.jpg") {
    //         $filename = explode(".", $img->foto)[0];
    //         return array_map('unlink', glob(FCPATH . "foto/user/$filename.*"));
    //     }
    // }
}