<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tdmasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $limit = 50;
        $offset = 0;

        DB::table('td_masuks')->insert([
            [
                'idMasuk'      => 'M001',
                'kdMasuk'      => 'MASUK001',
                'kdBarangBeli' => 'BARANG001',
                'jumlah'       => 11,
                'subtotal'     => 55000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M002',
                'kdMasuk'      => 'MASUK002',
                'kdBarangBeli' => 'BARANG002',
                'jumlah'       => 12,
                'subtotal'     => 60000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M003',
                'kdMasuk'      => 'MASUK003',
                'kdBarangBeli' => 'BARANG003',
                'jumlah'       => 13,
                'subtotal'     => 65000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M004',
                'kdMasuk'      => 'MASUK004',
                'kdBarangBeli' => 'BARANG004',
                'jumlah'       => 14,
                'subtotal'     => 70000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M005',
                'kdMasuk'      => 'MASUK005',
                'kdBarangBeli' => 'BARANG005',
                'jumlah'       => 15,
                'subtotal'     => 75000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M006',
                'kdMasuk'      => 'MASUK006',
                'kdBarangBeli' => 'BARANG006',
                'jumlah'       => 16,
                'subtotal'     => 80000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M007',
                'kdMasuk'      => 'MASUK007',
                'kdBarangBeli' => 'BARANG007',
                'jumlah'       => 17,
                'subtotal'     => 85000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M008',
                'kdMasuk'      => 'MASUK008',
                'kdBarangBeli' => 'BARANG008',
                'jumlah'       => 18,
                'subtotal'     => 90000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M009',
                'kdMasuk'      => 'MASUK009',
                'kdBarangBeli' => 'BARANG009',
                'jumlah'       => 19,
                'subtotal'     => 95000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M010',
                'kdMasuk'      => 'MASUK010',
                'kdBarangBeli' => 'BARANG010',
                'jumlah'       => 20,
                'subtotal'     => 100000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M011',
                'kdMasuk'      => 'MASUK011',
                'kdBarangBeli' => 'BARANG011',
                'jumlah'       => 21,
                'subtotal'     => 105000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M012',
                'kdMasuk'      => 'MASUK012',
                'kdBarangBeli' => 'BARANG012',
                'jumlah'       => 22,
                'subtotal'     => 110000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M013',
                'kdMasuk'      => 'MASUK013',
                'kdBarangBeli' => 'BARANG013',
                'jumlah'       => 23,
                'subtotal'     => 115000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M014',
                'kdMasuk'      => 'MASUK014',
                'kdBarangBeli' => 'BARANG014',
                'jumlah'       => 24,
                'subtotal'     => 120000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M015',
                'kdMasuk'      => 'MASUK015',
                'kdBarangBeli' => 'BARANG015',
                'jumlah'       => 25,
                'subtotal'     => 125000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M016',
                'kdMasuk'      => 'MASUK016',
                'kdBarangBeli' => 'BARANG016',
                'jumlah'       => 26,
                'subtotal'     => 130000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M017',
                'kdMasuk'      => 'MASUK017',
                'kdBarangBeli' => 'BARANG017',
                'jumlah'       => 27,
                'subtotal'     => 135000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M018',
                'kdMasuk'      => 'MASUK018',
                'kdBarangBeli' => 'BARANG018',
                'jumlah'       => 28,
                'subtotal'     => 140000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M019',
                'kdMasuk'      => 'MASUK019',
                'kdBarangBeli' => 'BARANG019',
                'jumlah'       => 29,
                'subtotal'     => 145000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'idMasuk'      => 'M020',
                'kdMasuk'      => 'MASUK020',
                'kdBarangBeli' => 'BARANG020',
                'jumlah'       => 30,
                'subtotal'     => 150000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
