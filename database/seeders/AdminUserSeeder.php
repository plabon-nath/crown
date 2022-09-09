<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Shakil Ahmed',
            'email' => 'sklmix00@gmail.com',
            'password' => bcrypt('12345678'),
            'role'=>'999'
        ]);
        User::create([
            'name' => 'Plabon Debnath',
            'email' => 'nath.plabon96@gmail.com',
            'password' => bcrypt('12345678'),
            'role'=>'999'
        ]);
    }
}
