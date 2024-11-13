<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'username' => 'admin',
            'nama' => 'admin',
            'password' => bcrypt('1'),
        ]);
    }
}
