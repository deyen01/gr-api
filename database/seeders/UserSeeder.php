<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_password = Str::random(8);
        echo "Пароль администратора: $admin_password";
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'is_admin' => TRUE,
            'password' => Hash::make($admin_password),
        ]);
    }
}
