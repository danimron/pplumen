<?php

use Illuminate\Database\Seeder;

class CalonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calon')->insert([
            [
                'no_urut' => 1,
                'npm' => '14081017009',
                'nama' => 'Rizal',
                'foto' => 'https://media.unpad.ac.id/photo/mahasiswa/140810/2017/140810170009.JPG',
                'visi' => 'Menjadikan organisasi yang solid dan sejahtera',
                'misi' => 'Menciptakan iklim yang harmonis untuk semua',
                'proker' => 'Malam solidaritas',
                'votes' => 0
            ],
            [
                'no_urut' => 2,
                'npm' => '140810170057',
                'nama' => 'Victor',
                'foto' => 'https://media.unpad.ac.id/photo/mahasiswa/140810/2017/140810170057.JPG',
                'visi' => 'Menjadikan organisasi yang hebat dan tangguh',
                'misi' => 'Menciptakan iklim yang kompetitif untuk semua',
                'proker' => 'Malam kompetisi',
                'votes' => 0
            ]
        ]);
    }
}
