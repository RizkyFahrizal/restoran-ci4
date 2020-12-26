<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use App\Models\Menu_M;
use App\Models\Order_M;
use App\Models\OrderDetail_M;

class Chekout extends BaseController
{
    protected $modelOrder;
    public function __construct()
    {
        $this->modelOrder = new Order_M();
        $this->modelMenu = new Menu_M();
        $this->modelOrderDetail = new OrderDetail_M();
    }

    public function index()
    {
        session();
        if (empty(session()->get('pelanggan'))) {
            return redirect()->to(base_url('Front/Login'));
        }

        $con = \Config\Database::connect();
        $idorder = $this->idorder();


        $pelanggan = session()->get('pelanggan');

        $total = $this->request->getPost('total');
        $tgl = date('Y-m-d');
        $sql = "SELECT * FROM tblorder WHERE idorder = $idorder";
        $result = $con->query($sql);
        $row = $result->getResult('array');
        $count = count($row);

        if ($count == 0) {
            $this->insertOrder($idorder, $pelanggan, $tgl, $total);
            $this->insertOrderDetail($idorder);
        } else {
            $this->insertOrderDetail($idorder);
        }
        $this->emptySession();
        return redirect()->to(base_url('/'));
    }

    public function insertOrder($idorder, $pelanggan, $tgl, $total)
    {
        $data = [
            'idorder' => $idorder,
            'pelanggan' => $pelanggan,
            'tglorder' => $tgl,
            'total' => $total,
            'bayar' => 0,
            'kembali' => 0,
            'status' => 0

        ];

        $this->modelOrder->insert($data);
    }

    public function insertOrderDetail($idorder = 1)
    {
        foreach (session()->get() as $key => $value) {

            if ($key <> 'pelanggan' && $key <> 'email' && $key <> 'user' && $key <> 'level' && $key <> 'password' && $key <> 'loggedIn' && $key <> '_ci_previous_url' && $key <> '__ci_last_regenerate') {
                $id = substr($key, 1);
                $menu[] = $this->modelMenu->where('idmenu', $id)->findAll();
                foreach ($menu as $men => $v) {
                    foreach ($v as $me => $val) {
                        $idmenu = $val['idmenu'];
                        $harga = $val['harga'];
                        $data = [
                            'idorderdetail' => '',
                            'idorder' => $idorder,
                            'idmenu' => $idmenu,
                            'jumlah' => $value,
                            'hargajual' => $harga,
                        ];
                        $this->modelOrderDetail->insert($data);
                    }
                }
            }
        }
    }

    public function idorder()
    {
        $con = \Config\Database::connect();
        $sql = "SELECT idorder FROM vorder ORDER BY idorder DESC";
        $result = $con->query($sql);
        $row = $result->getResult('array');
        $jumlah = count($row);
        if ($jumlah == 0) {
            $id = 1;
            return $id;
        } else {
            $row = $result->getResult('array');
            foreach ($row as $key) {
                $id = $key['idorder'] + 1;
                return $id;
            }
        }
    }

    public function emptySession()
    {
        foreach (session()->get() as $key => $value) {
            if ($key <> 'pelanggan' && $key <> 'email' && $key <> 'user' && $key <> 'level' && $key <> 'password' && $key <> 'loggedIn' && $key <> '_ci_previous_url' && $key <> '__ci_last_regenerate') {
                $id = substr($key, 1);
                unset($_SESSION['_' . $id]);
            }
        }
    }
}
