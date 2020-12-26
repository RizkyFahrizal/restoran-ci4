<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;

class Cart extends BaseController
{

    public function index($id = null)
    {
        $model = new Menu_M();

        return view('frontend/menu/cart');
    }

    public function isi($id = null)
    {
        $db = new Menu_M;

        if (isset($id)) {
            $menuid = [];
            if (session()->has('_' . $id)) {
                session()->set('_' . $id, session()->get('_' . $id) + 1);
            } else {
                session()->set('_' . $id, 1);
            }
            return redirect()->to(base_url('/front/cart/isi'));
        } else {
            $menuid = [];
            foreach (session()->get() as $key => $value) {
                if (($key <> 'pelanggan' && $key <> 'idpelanggan' && $key <> 'user' && $key <> 'level' && $key <> 'iduser' && $key <> '__ci_last_regenerate' && $key <> '_ci_previous_url' && $key <> 'email' && $key <> 'loggedIn')) {
                    $id2 = substr($key, 1);
                    $menuid[$id2] = $value;
                }
            }
            if ($menuid == null) {
                return redirect()->to(base_url('/'));
            }
            foreach ($menuid as $k => $v) {

                $namamenu = $db->where(['idmenu' => $k])->first();
                $menu[$k] = $namamenu;
                $menu[$k]['jumlah'] = $v;
            }


            $data['menu'] = $menu;

            return view('frontend/menu/cart', $data);
        }
    }

    public function tambah($id = null)
    {
        session()->set('_' . $id, session()->get('_' . $id) + 1);
        return redirect()->to(base_url('/front/cart/isi'));
    }
    public function kurang($id = null)
    {
        $idx = '_' . $id;
        session()->set('_' . $id, session()->get('_' . $id) - 1);
        if (session()->get('_' . $id) == 0) {
            session()->remove($idx);
        }
        return redirect()->to(base_url('/front/cart/isi'));
    }
    public function delete($id = null)
    {
        $idx = '_' . $id;
        session()->remove($idx);
        return redirect()->to(base_url('/front/cart/isi'));
    }

    public function find($id = null)
    {
        $model  = new Menu_M();
        $idmenu  = $model->find($id);

        $data = [
            'idmenu' => $idmenu
        ];

        return view("'frontend/menu/cart", $data);
    }

    public function coba()
    {
        echo "test";
        return redirect()->to(base_url('/front/cart'));
    }

    //--------------------------------------------------------------------

}
