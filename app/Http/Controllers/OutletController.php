<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Outlet;
class OutletController extends Controller
{
    public function show()
    {
        return view('outlet', [
            'title' => 'Show All Outlet',
        ]);
    }

    public function getoutlet()
    {
       $i = 1;
        foreach (Outlet::all() as $Otl) {
            $data[] = array(
                'no' => $i++,
                'KdOutlet' => $Otl['KdOutlet'],
                'NmOutlet' => $Otl['NmOutlet'],
                'Alamat' => $Otl['Alamat'],
                'Status' => $Otl['Aktif'] == '1' ? 'Aktif' : 'Tidak Aktif',
                'action' =>'<button class="btn btn-warning" onclick="edit(\'' . $Otl['KdProduk']  . '\')">Edit</i></button> &nbsp; <button class="btn btn-danger" onclick="hapus(\'' .$Otl['KdProduk'] . '\')">Hapus</button>',
            );
        }
        $dataOtl = array(
            'data' => $data
        );
        echo json_encode($dataOtl);
    }

}
