<?php namespace Localchat\messages\Updates;

use Seeder;
use localchat\messages\Models\Message;

class SeedMessagesTable extends Seeder
{
    public function run()
    {
        $messages =
        [
            [
                'id'            => 1,
                'created_at'    => "2020-03-03 14:18:00",
                'updated_at'    => "2020-03-03 14:18:00",
                'user_id'       => "1",
                'group_id'      => "1",
                'message'       => "Ahoj neznama osoba. Ja som automaticky vyplnena sprava."
            ],
            [
                'id'            => 2,
                'created_at'    => "2020-03-03 14:19:00",
                'updated_at'    => "2020-03-03 14:19:00",
                'user_id'       => "2",
                'group_id'      => "2",
                'message'       => "Ahoj neznama osoba. Ja som automaticky vyplnena sprava."
            ],
            [
                'id'            => 3,
                'created_at'    => "2020-03-03 14:20:00",
                'updated_at'    => "2020-03-03 14:20:00",
                'user_id'       => "3",
                'group_id'      => "3",
                'message'       => "Ahoj neznama osoba. Ja som automaticky vyplnena sprava."
            ]
        ];

        Message::insert($messages);
    }
}