<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Menu extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo "Belajar CI-4/menu";
    }

    public function select()
    {
        // return view('welcome_message');
        echo "<h1>Untuk Menampilkan Data</h1>";
    }

    public function update($id = '', $nama = "")
    {
        // return view('welcome_message');
        echo "<h2>untuk update data dengan id : {$id} {$nama}</h2>";
    }

    //--------------------------------------------------------------------

}
