<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // PENJUALAN 1
            ['penjualan_id' => 1, 'kode_barang' => 1,  'jumlah' => 2, 'harga' => 2300000],
            ['penjualan_id' => 1, 'kode_barang' => 2,  'jumlah' => 1, 'harga' => 180000],
            ['penjualan_id' => 1, 'kode_barang' => 3,  'jumlah' => 3, 'harga' => 4000],

            // PENJUALAN 2
            ['penjualan_id' => 2, 'kode_barang' => 4,  'jumlah' => 2, 'harga' => 8000],
            ['penjualan_id' => 2, 'kode_barang' => 5,  'jumlah' => 1, 'harga' => 10000],
            ['penjualan_id' => 2, 'kode_barang' => 6,  'jumlah' => 4, 'harga' => 11000],

            // PENJUALAN 3
            ['penjualan_id' => 3, 'kode_barang' => 7,  'jumlah' => 2, 'harga' => 6000],
            ['penjualan_id' => 3, 'kode_barang' => 8,  'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 3, 'kode_barang' => 9,  'jumlah' => 3, 'harga' => 5000],

            // PENJUALAN 4
            ['penjualan_id' => 4, 'kode_barang' => 10, 'jumlah' => 2, 'harga' => 9000],
            ['penjualan_id' => 4, 'kode_barang' => 11, 'jumlah' => 1, 'harga' => 13000],
            ['penjualan_id' => 4, 'kode_barang' => 12, 'jumlah' => 2, 'harga' => 9000],

            // PENJUALAN 5
            ['penjualan_id' => 5, 'kode_barang' => 13, 'jumlah' => 3, 'harga' => 4000],
            ['penjualan_id' => 5, 'kode_barang' => 14, 'jumlah' => 1, 'harga' => 4500],
            ['penjualan_id' => 5, 'kode_barang' => 15, 'jumlah' => 2, 'harga' => 70000],

            // PENJUALAN 6
            ['penjualan_id' => 6, 'kode_barang' => 1,  'jumlah' => 1, 'harga' => 2300000],
            ['penjualan_id' => 6, 'kode_barang' => 6,  'jumlah' => 2, 'harga' => 11000],
            ['penjualan_id' => 6, 'kode_barang' => 11, 'jumlah' => 1, 'harga' => 13000],

            // PENJUALAN 7
            ['penjualan_id' => 7, 'kode_barang' => 2,  'jumlah' => 3, 'harga' => 180000],
            ['penjualan_id' => 7, 'kode_barang' => 7,  'jumlah' => 1, 'harga' => 6000],
            ['penjualan_id' => 7, 'kode_barang' => 12, 'jumlah' => 2, 'harga' => 9000],

            // PENJUALAN 8
            ['penjualan_id' => 8, 'kode_barang' => 3,  'jumlah' => 2, 'harga' => 4000],
            ['penjualan_id' => 8, 'kode_barang' => 8,  'jumlah' => 1, 'harga' => 15000],
            ['penjualan_id' => 8, 'kode_barang' => 13, 'jumlah' => 3, 'harga' => 4000],

            // PENJUALAN 9
            ['penjualan_id' => 9, 'kode_barang' => 4,  'jumlah' => 1, 'harga' => 8000],
            ['penjualan_id' => 9, 'kode_barang' => 9,  'jumlah' => 2, 'harga' => 5000],
            ['penjualan_id' => 9, 'kode_barang' => 14, 'jumlah' => 1, 'harga' => 4500],

            // PENJUALAN 10
            ['penjualan_id' => 10,'kode_barang' => 5,  'jumlah' => 1, 'harga' => 10000],
            ['penjualan_id' => 10,'kode_barang' => 10, 'jumlah' => 2, 'harga' => 9000],
            ['penjualan_id' => 10,'kode_barang' => 15, 'jumlah' => 1, 'harga' => 70000],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}