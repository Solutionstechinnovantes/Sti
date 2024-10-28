<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name' => 'Sti',
            'description' => 'Solutions & Technologies Innovantes ',
            'logo' => 'logo.png',
            'address' => 'Ksar, Route Chrif Abdellahi',
            'email' => 'solutionstechnologiesinnovantes@gmail.com',
            'phone' => '27273333',
            'maps_embed' => 'maps.com',
        ]);
    }
}
