<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Kategori_M;

class Kategori extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Belajar CI-4/kategori";
    }

    public function select()
    {
        $model = new Kategori_M;
        $kategori = $model->findALL();

        print_r($kategori);

        $data = [
            'judul' => 'SELECT DATA Dari Controller',
            'kategori' => $kategori
        ];
        echo view("kategori/select", $data);
    }

    public function selectwhere($id = "null")
    {
        echo "menampilkan data yg dipilih {$id}";
    }

    public function forminsert()
    {
        // echo view("template/header");
        echo view("kategori/forminsert");
        // echo view("template/footer");
    }
    public function formupdate($id = null)
    {
        echo "menampilkan from update $id";
    }
    public function update($id = null)
    {
        // echo view("template/header");
        echo view("kategori/update");
        // echo view("template/footer");
    }
    public function delete($id = null)
    {
        echo "proses delete data";
    }

    //--------------------------------------------------------------------

}
