<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // add an admin user and normal user
        $users = [
            [
                'name'  => 'Admin User',
                'email' => 'admin@admin.com',
                'is_admin'  => true,
                'password'  => bcrypt('123456'),
            ],
            [
                'name'  => 'Normal User',
                'email' => 'user@user.com',
                'is_admin'  => false,
                'password'  => bcrypt('123456'),
            ],
        ];
  
        foreach ($users as $value) {
            User::create($value);
        }
    }
}
