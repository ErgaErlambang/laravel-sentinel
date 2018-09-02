<?php

use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('karyawans')->insert([
        [
        	'nama' => 'Dimas',
        	'alamat' => 'Jl.'.str_random('10'),
        	'phone' => '+62'. mt_rand(1000000, 99999999),
        	'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
        	'nama' => 'Budi',
        	'alamat' => 'Jl.'.str_random('13'),
        	'phone' => '+62'. mt_rand(1000000, 99999999),
        	'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Reno',
        	'alamat' => 'Jl.'.str_random('10'),
        	'phone' => '+62'. mt_rand(1000000, 99999999),
        	'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Vitra',
        	'alamat' => 'Jl.'.str_random('14'),
        	'phone' => '+62'. mt_rand(1000000, 99999999),
        	'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
            'nama' => 'Ajeng',
        	'alamat' => 'Jl.'.str_random('15'),
        	'phone' => '+62'. mt_rand(1000000, 99999999),
        	'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],
        [
        	'nama' => 'Bayu',
        	'alamat' => 'Jl.'.str_random('15'),
        	'phone' => '+62'. mt_rand(1000000, 99999999),
        	'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ],

        ]);
    }
}
