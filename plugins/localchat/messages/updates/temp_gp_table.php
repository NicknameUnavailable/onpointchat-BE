<?php namespace Localchat\messages\Updates;

use Seeder;
use localchat\messages\Models\Group;

class SeedGroupsTable extends Seeder
{
    public function run()
    {
        $groups =
        [
            [
                'id'            => 1,
                'created_at'    => "2020-03-03 14:18:00",
                'updated_at'    => "2020-03-03 14:18:00",
                'name'          => "Broadcast",
                'user_id'       => "1",
                'code'          => 1234

            ],
            [
                'id'            => 2,
                'created_at'    => "2020-03-03 14:19:00",
                'updated_at'    => "2020-03-03 14:19:00",
                'name'          => "HybridLab",
                'user_id'       => "1",
                'code'          => 5678
            ],
            [
                'id'            => 3,
                'created_at'    => "2020-03-03 14:20:00",
                'updated_at'    => "2020-03-03 14:20:00",
                'name'          => "GamesLab",
                'user_id'       => "1",
                'code'          => 9101
            ]
        ];

        Group::insert($groups);
    }
}