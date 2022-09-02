<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function show()
    {
        return view('produk', [
            'title' => 'Show All Produk',
        ]);
    }

    public function getproduk()
    {
       $i = 1;
        foreach (Produk::all() as $prdk) {
            $data[] = array(
                'no' => $i++,
                'KdProduk' => $prdk['KdProduk'],
                'NmProduk' => $prdk['NmProduk'],
                'HNA' => "Rp. ".$prdk['HNA'],
                'action' =>'<button class="btn btn-warning" onclick="edit(\'' . $prdk['KdProduk']  . '\')">Edit</i></button> &nbsp; <button class="btn btn-danger" onclick="hapus(\'' .$prdk['KdProduk'] . '\')">Hapus</button>',
            );
        }
        $dataPrdk = array(
            'data' => $data
        );
        echo json_encode($dataPrdk);
    }
}
