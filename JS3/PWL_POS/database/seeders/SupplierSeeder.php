<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('m_supplier')->insert([
        ['supplier_kode'=>'SUP01','supplier_nama'=>'PT Pinang Merah','supplier_alamat'=>'JL. Pinang Merah No. 123, Surabaya'],
        ['supplier_kode'=>'SUP02','supplier_nama'=>'PT Kembang Kertas','supplier_alamat'=>'JL. Kembang Kertas No. 456, Malang'],
        ['supplier_kode'=>'SUP03','supplier_nama'=>'PT Pisang Kipas','supplier_alamat'=>'JL. Pisang Kipas No. 789, Jakarta'],
        ]);
    }
}
