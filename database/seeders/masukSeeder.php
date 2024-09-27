<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert 3 static records into 't_masuks'
        DB::table('t_masuks')->insert([
            [
                'kdMasuk'     => 'MASUK001',
                'tglMasuk'    => '2024-09-25',
                'kdUser'      => 'USER001',  // No longer needs to exist in 'users' table
                'kdSupplier'  => 'SUP001',   // Must exist in 'suppliers' table
                'totalMasuk'  => 100,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'kdMasuk'     => 'MASUK002',
                'tglMasuk'    => '2024-09-26',
                'kdUser'      => 'USER002',
                'kdSupplier'  => 'SUP002',
                'totalMasuk'  => 150,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'kdMasuk'     => 'MASUK003',
                'tglMasuk'    => '2024-09-27',
                'kdUser'      => 'USER003',
                'kdSupplier'  => 'SUP003',
                'totalMasuk'  => 200,
                'created_at'  => now(),
                'updated_at'  => now(),
            ]
        ]);
    }
}
