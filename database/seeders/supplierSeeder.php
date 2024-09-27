<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id ID');

        for ($i = 0; $i <=30; $i++) {
            DB::table('t_suppliers')->insert([
                'kdSupplier'   => 'SUP' . $faker->numberBetween(1, 999),
                'namaSupplier' => $faker->unique()->name,        
                'alamat'       => $faker->unique()->address,      
                'created_at'   => now(),
                'updated_at'   => now(),
            ]);
    }
}
}