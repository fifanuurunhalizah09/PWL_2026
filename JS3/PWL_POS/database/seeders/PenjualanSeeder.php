<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil user_id dari tabel users
        $admin = DB::table('users')->where('email', 'admin@example.com')->first();
        $manager = DB::table('users')->where('email', 'manager@example.com')->first();
        $staff   = DB::table('users')->where('email', 'staff@example.com')->first();

        // Pastikan user ada
        if (!$admin || !$manager || !$staff) {
            throw new \Exception("User admin/manager/staff belum ada di tabel users. Jalankan UserSeeder dulu!");
        }

        $data = [
            ['user_id' => $admin->id, 'pembeli' => 'Aliza', 'penjualan_kode' => 'TRX001', 'penjualan_tanggal' => '2024-02-01'],
            ['user_id' => $admin->id, 'pembeli' => 'Pina', 'penjualan_kode' => 'TRX002', 'penjualan_tanggal' => '2024-02-02'],
            ['user_id' => $admin->id, 'pembeli' => 'Salma', 'penjualan_kode' => 'TRX003', 'penjualan_tanggal' => '2024-02-03'],
            ['user_id' => $manager->id, 'pembeli' => 'Ghea', 'penjualan_kode' => 'TRX004', 'penjualan_tanggal' => '2024-02-04'],
            ['user_id' => $manager->id, 'pembeli' => 'Safira', 'penjualan_kode' => 'TRX005', 'penjualan_tanggal' => '2024-02-05'],
            ['user_id' => $manager->id, 'pembeli' => 'Sharren', 'penjualan_kode' => 'TRX006', 'penjualan_tanggal' => '2024-02-06'],
            ['user_id' => $staff->id, 'pembeli' => 'Vanesha', 'penjualan_kode' => 'TRX007', 'penjualan_tanggal' => '2024-02-07'],
            ['user_id' => $staff->id, 'pembeli' => 'Lidya', 'penjualan_kode' => 'TRX008', 'penjualan_tanggal' => '2024-02-08'],
            ['user_id' => $manager->id, 'pembeli' => 'Anggie', 'penjualan_kode' => 'TRX009', 'penjualan_tanggal' => '2024-02-09'],
            ['user_id' => $admin->id, 'pembeli' => 'Rere', 'penjualan_kode' => 'TRX010', 'penjualan_tanggal' => '2024-02-10'],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}