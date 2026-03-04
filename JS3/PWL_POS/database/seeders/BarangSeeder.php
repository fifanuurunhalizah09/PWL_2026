<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kode_barang' => 1, 'nama_barang' => 'TV LED', 'harga' => 2000000, 'stok' => 10],
            ['kode_barang' => 2, 'nama_barang' => 'Kipas Angin', 'harga' => 150000, 'stok' => 20],
            ['kode_barang' => 3, 'nama_barang' => 'Pulpen', 'harga' => 2000, 'stok' => 100],
            ['kode_barang' => 4, 'nama_barang' => 'Buku Tulis', 'harga' => 5000, 'stok' => 50],
            ['kode_barang' => 5, 'nama_barang' => 'Citato', 'harga' => 7000, 'stok' => 30],
            ['kode_barang' => 6, 'nama_barang' => 'Lampu Hias', 'harga' => 50000, 'stok' => 15],
            ['kode_barang' => 7, 'nama_barang' => 'Bantal Karakter', 'harga' => 30000, 'stok' => 25],
            ['kode_barang' => 8, 'nama_barang' => 'Lipstik', 'harga' => 20000, 'stok' => 40],
            ['kode_barang' => 9, 'nama_barang' => 'Bedak', 'harga' => 25000, 'stok' => 35],
            ['kode_barang' => 10, 'nama_barang' => 'Biskuit', 'harga' => 6000, 'stok' => 60],
            ['kode_barang' => 11, 'nama_barang' => 'Setrika', 'harga' => 250000, 'stok' => 12],
            ['kode_barang' => 12, 'nama_barang' => 'Rice Cooker', 'harga' => 300000, 'stok' => 8],
            ['kode_barang' => 13, 'nama_barang' => 'Penggaris', 'harga' => 3000, 'stok' => 75],
            ['kode_barang' => 14, 'nama_barang' => 'Coklat', 'harga' => 8000, 'stok' => 50],
            ['kode_barang' => 15, 'nama_barang' => 'Jam Dinding', 'harga' => 40000, 'stok' => 20],
        ];

        DB::table('m_barang')->insert($data);
    }
}