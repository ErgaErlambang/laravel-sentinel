<?php

use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruds')->insert([
          [
            'nama' => 'Alifia',
            'judul' => 'Tes Pertama',
          ],

          [
            'nama' => 'Adrian',
            'judul' => 'tes kedua',
          ],

          [
            'nama' => 'Ario',
            'judul' => 'Tes Ketiga',
          ]
        ]);
    }
}
