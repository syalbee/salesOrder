<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Outlet::create([
                'KdOutlet' => "OTL-" . $i,
                'NmOutlet' => "Outlet " . $i,
                'Alamat' =>'Jl. Kubang sari ' . $i,
                'Aktif' => true,
            ]);
        }
    }
}
