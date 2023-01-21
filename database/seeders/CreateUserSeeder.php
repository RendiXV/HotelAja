<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Hamba Allah',
                'email' => 'admin@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('admin123'),
            ],
            [
                'name' => 'Aleksander Ucok',
                'email' => 'resepsionis@gmail.com',
                'is_admin' => '0',
                'password' => bcrypt('resepsion123'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
