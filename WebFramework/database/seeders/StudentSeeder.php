<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB ;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke database
        DB::table('students')->insert([
            'nama' => 'Putri Lesmana',
            'nim' => 'G09877654',
            'prodi' => 'Fisika',
        ]);
    }
}
