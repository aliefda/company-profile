<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'Driv3r',
            'description' => 'Lorem Ipsum Sir Dolor Amet',
            'logo' => 'logo.png',
            'alamat' => '123 Main Street, New York, NY 10001',
            'email' => 'info@drivingschool.com',
            'telepon' => '(123) 456-7890',
            'maps_embed' => 'maps.com',
        ]);
    }
}
