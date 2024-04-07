<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB as DB;
Use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

      /*  User::created([
            'name' => 'Moustapha',
            'email' => 'taphath97@gmail.com',
            'password' => Hash::make('tapha1234')
        ]);

    }
        */

        DB::table('users')->insert([
            'name' => 'Moustapha',
            'email' => 'taphath97@gmail.com',
            'password' => Hash::make('tapha1234')
        ]);
    }
}
