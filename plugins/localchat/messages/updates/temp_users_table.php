<?php namespace Localchat\messages\Updates;

use Seeder;
use localchat\messages\Models\User;

class SeedUsersTable extends Seeder
{
    public function run()
    {
        $users =
        [
            [
                'id'            => 1,
                'created_at'    => "2020-03-03 14:18:00",
                'updated_at'    => "2020-03-03 14:18:00",
                'name'      => "Admin"
            ],
            [
                'id'            => 2,
                'created_at'    => "2020-03-03 14:18:00",
                'updated_at'    => "2020-03-03 14:18:00",
                'name'      => "Arnost"
            ],
            [
                'id'            => 3,
                'created_at'    => "2020-03-03 14:19:00",
                'updated_at'    => "2020-03-03 14:19:00",
                'name'      => "Joseph"
            ],
            [
                'id'            => 4,
                'created_at'    => "2020-03-03 14:20:00",
                'updated_at'    => "2020-03-03 14:20:00",
                'name'      => "Enrike"
            ]
        ];

        User::insert($users);
    }
}