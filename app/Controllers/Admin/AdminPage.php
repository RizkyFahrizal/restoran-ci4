<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class AdminPage extends BaseController
{
    public function index()
    {
        return view('template/admin');
    }

    //--------------------------------------------------------------------

}
