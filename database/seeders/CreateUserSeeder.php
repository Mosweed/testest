<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'effecten expert',
                'email' => 'expert@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 1,
            ],
            ['name' => 'planner',
                'email' => 'planner@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 2,
            ],
            ['name' => 'bibliotheekbeheerder',
                'email' => 'bibliotheekbeheerder@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 3,
            ],
            ['name' => 'beheerder',
                'email' => 'beheerder@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => 4,
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
