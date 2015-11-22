<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoinPartnershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ask_partnerships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('phone', 16);
            $table->enum('link-type', ['facebook', 'instagram', 'twitter', 'website']);
            $table->string('link-url');
            $table->timestamp('added_at');
            $table->boolean('is_confirmed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ask_partnerships');
    }
}
