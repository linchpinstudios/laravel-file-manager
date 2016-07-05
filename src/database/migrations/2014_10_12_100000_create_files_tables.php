<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Config;

class CreateFilesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Config::get('filemanager.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('file')->index();
            $table->string('type');
            $table->integer('size');
            $table->integer('width');
            $table->integer('height');
            $table->timestamps();
        });

        Schema::create(Config::get('filemanager.table') . '_meta', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('file_id');
            $table->string('key');
            $table->string('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(Config::get('filemanager.table'));
        Schema::drop(Config::get('filemanager.table') . '_meta');
    }
}
