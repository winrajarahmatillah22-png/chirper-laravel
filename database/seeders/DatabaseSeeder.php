<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Mahasiswa',
            'email' => 'win.240170226@mhs.unimal.ac.id',
            'password' => Hash::make('password'),
        ]);
    }
}