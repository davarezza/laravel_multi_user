<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name' => 'Dava Rezza',
                'email' => 'dava@gmail.com',
                'role' => 'murid',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Pak Radit',
                'email' => 'radit@gmail.com',
                'role' => 'guru',
                'password' => bcrypt('123')
            ],
            [
                'name' => 'Pak Rudi',
                'email' => 'rudi@gmail.com',
                'role' => 'kepsek',
                'password' => bcrypt('123')
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
