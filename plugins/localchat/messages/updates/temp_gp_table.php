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
                'name'      => "Broadcast"
            ],
            [
                'id'            => 2,
                'created_at'    => "2020-03-03 14:19:00",
                'updated_at'    => "2020-03-03 14:19:00",
                'name'      => "HybridLab"
            ],
            [
                'id'            => 3,
                'created_at'    => "2020-03-03 14:20:00",
                'updated_at'    => "2020-03-03 14:20:00",
                'name'      => "GamesLab"
            ]
        ];

        Group::insert($groups);
    }
}