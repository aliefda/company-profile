<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul' => 'Driv3r',
            'subjudul' => 'Lorem Ipsum Sir Dolor Amet',
            'deskripsi_1' => 'Dolor Sit Amet',
            'deskripsi_2' => 'Dolor Sit Amet',
            'kelebihan_1' => 'Lorem Ipsum',
            'kelebihan_2' => 'Lorem Ipsum',
            'kelebihan_3' => 'Lorem Ipsum',
            'kelebihan_4' => 'Lorem Ipsum',
        ]);
    }
}
