<?php namespace Localchat\Messages\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('localchat_messages_groups', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('localchat_messages_groups');
    }
}
