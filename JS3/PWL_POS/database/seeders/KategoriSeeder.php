<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('m_kategori')->insert([
        ['kategori_kode' => 'KT01', 'kategori_nama' => 'Elektronik'],
        ['kategori_kode' => 'KT02', 'kategori_nama' => 'Dekorasi Kamar'],
        ['kategori_kode' => 'KT03', 'kategori_nama' => 'ATK'],
        ['kategori_kode' => 'KT04', 'kategori_nama' => 'Kosmetik'],
        ['kategori_kode' => 'KT05', 'kategori_nama' => 'Snack'],
        ]);
    }
}
