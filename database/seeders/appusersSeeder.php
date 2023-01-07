<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AppUsers;
class appusersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $users = [
            [
                'userId' => 1,
                'username' => 'Kostaspap99',
                'yearOfBirth' => 1999,
                'gender' => false,
                'country' => 'Greece'
            ],
            [
                'userId' => 2,
                'username' => 'elenidim',
                'yearOfBirth' => 2001,
                'gender' => true,
                'country' => 'Greece'
            ],
            [
                'userId' => 3,
                'username' => 'josevasquez',
                'yearOfBirth' => 1995,
                'gender' => false,
                'country' => 'England'
            ],
            [
                'userId' => 4,
                'username' => 'Gina04',
                'yearOfBirth' => 2004,
                'gender' => true,
                'country' => 'Guatemala'
            ],
            [
                'userId' => 5,
                'username' => 'Giannakis08',
                'yearOfBirth' => 2008,
                'gender' => false,
                'country' => 'Greece'
            ],
            [
                'userId' => 6,
                'username' => 'jj66',
                'yearOfBirth' => 2006,
                'gender' => false,
                'country' => 'Nigeria'
            ],
            [
                'userId' => 9,
                'username' => 'Themis',
                'yearOfBirth' => 1992,
                'gender' => false,
                'country' => 'Greece'
            ],
            [
                'userId' => 45,
                'username' => 'makiskont',
                'yearOfBirth' => 1996,
                'gender' => false,
                'country' => 'Greece'
            ],
            [
                'userId' => 112,
                'username' => 'Elizabeth98',
                'yearOfBirth' => 1998,
                'gender' => true,
                'country' => 'England'
            ]
        ];

        foreach ($users as $user) {
            AppUsers::create($user);
        }
    }
}
