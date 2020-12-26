<?php

namespace App\Controllers\Front;

use App\Models\Pelanggan_M;
use App\Controllers\BaseController;

class Daftar extends BaseController
{
    public function index()
    {
        // $pager = \Config\Services::pager();
        $model = new Pelanggan_M;

        $data = [
            'judul' => "Daftar pelanggan",

            // 'pelanggan' => $model->paginate(3, 'page'),
            // 'pager' => $model->pager
        ];
        return view("frontend/layout/daftar", $data);
    }

    // public function create()
    // {
    //     return view("frontend/layout/daftar");
    // }
    public function insert()
    {

        if (isset($_POST['daftar'])) {
            $data = [
                'pelanggan' => $_POST['pelanggan'],
                'email' => $_POST['email'],
                'alamat' => $_POST['alamat'],
                'telpon' => $_POST['telpon'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                'aktif' => 1
            ];
            $model = new Pelanggan_M();

            if ($model->insert($data) === false) {
                $error = $model->errors();

                session()->setFlashdata('info', $error);
                return redirect()->to(base_url("/Front/Daftar"));
            } else {
                return redirect()->to(base_url("/Front/Login"));
            }
        }
    }

    // public function find($id = null)
    // {
    //     $model = new pelanggan_M;
    //     $pelanggan = $model->find($id);
    //     $data = [
    //         'judul' => 'UPDATE pelanggan ',
    //         'pelanggan' => $pelanggan
    //     ];
    //     return view("pelanggan/update", $data);
    // }

    // public function delete($id = null)
    // {
    //     $model = new pelanggan_M;
    //     $model->delete($id);
    //     return redirect()->to(base_url("/"));
    // }
    // public function update($id = null, $isi = 1)
    // {
    //     $model = new pelanggan_M;
    //     if ($isi == 0) {
    //         $isi = 1;
    //     } else {
    //         $isi = 0;
    //     }
    //     $data = [
    //         'aktif' => $isi
    //     ];
    //     $model->update($id, $data);
    //     return redirect()->to(base_url("/Front/Daftar"));
    // }

    // public function ubah()
    // {
    //     $id = $_POST['idpelanggan'];
    //     $data = [
    //         'email' => $_POST['email'],
    //         'level' => $_POST['level']
    //     ];

    //     $model = new pelanggan_M();
    //     $model->update($id, $data);
    //     return redirect()->to(base_url("/admin/pelanggan"));
    // }
}
