<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {
            Produk::create([
                'KdProduk' => "PR0" . $i,
                'NmProduk' => "Produk " . $i,
                'HNA' => $i . '000',
            ]);
        }
    }
}
