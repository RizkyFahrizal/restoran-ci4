<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM tblorder ORDER BY status ASC";
        $result = $db->query($sql);
        $row = $result->getResult('array');
        foreach ($row as $key) {
            echo $key['total'];
            echo "<br>";
        }
        dd($row);
    }
}
