<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
    public function run(): void
    {
            DB::table('tbl_inventaris')->insert([
                [
                    'nama_inventaris' => 'Laptop ASUS',
                    'kode_inventaris' => 'INV-001',
                    'harga' => '12000000',
                    'tanggal' => Carbon::now()->subDays(10),
                    'ruangan' => 'Ruang IT',
                    'keterangan' => 'baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nama_inventaris' => 'Printer Epson',
                    'kode_inventaris' => 'INV-002',
                    'harga' => '3500000',
                    'tanggal' => Carbon::now()->subDays(5),
                    'ruangan' => 'Ruang Administrasi',
                    'keterangan' => 'kurang_baik',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'nama_inventaris' => 'Meja Kerja',
                    'kode_inventaris' => 'INV-003',
                    'harga' => '1500000',
                    'tanggal' => Carbon::now()->subDays(20),
                    'ruangan' => 'Ruang Keuangan',
                    'keterangan' => 'rusak',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }

    

