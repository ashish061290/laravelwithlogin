<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password')
        ];
        Admin::create($admin);
    }
}
