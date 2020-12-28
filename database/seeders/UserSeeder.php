<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);

        $ketua = User::create([
            'email' => 'test@test.com',
            'password' => bcrypt('test123'),
        ]);
    }
}
