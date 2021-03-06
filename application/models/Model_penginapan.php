<?php defined('BASEPATH') or exit('No direct script access allowed');
class Model_penginapan extends CI_Model{


private $_table = "penginapan";
    public $id_penginapan;
    public $id_kota;
    public $nama_penginapan;
    public $jumlah_tamu;
    public $harga;
    public $post_date;
    public $foto = "default.jpg";

    public function rules()
    {
        return [
            [
                'field' => 'nama_penginapan',
                'label' => 'nama_penginapan',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_penginapan)
    {
        return $this->db->get_where($this->_table, ["id_penginapan" => $id_penginapan])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kota = $post["id_kota"];
        $this->nama_penginapan = $post["nama_penginapan"];
        $this->jumlah_tamu = $post["jumlah_tamu"];
        $this->harga = $post["harga"];
        $this->post_date = date('Y-m-d');
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
        var_dump($post);
    }

    public function update()
    {
        $post = $this->input->post();
        
        $this->id_penginapan = $post["id_penginapan"];
        $this->id_kota = $post["id_kota"];
        $this->nama_penginapan = $post["nama_penginapan"];
        $this->jumlah_tamu = $post["jumlah_tamu"];
        $this->harga = $post["harga"];
        $this->post_date = date('Y-m-d');

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update($this->_table, $this, array("id_penginapan"=>$post["id_penginapan"]));
        var_dump($post);
    }

    public function delete($id_penginapan)
    {
        $this->_deleteImage($id_penginapan);
        return $this->db->delete($this->_table, array("id_penginapan" => $id_penginapan));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './foto/admin/penginapan';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->nama_penginapan;
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImage($id_penginapan)
    {
        $img = $this->getById($id_penginapan);
        if ($img->foto != "default.jpg") {
            $filename = explode(".", $img->foto)[0];
            return array_map('unlink', glob(FCPATH . "foto/admin/penginapan/$filename.*"));
        }
    }
}