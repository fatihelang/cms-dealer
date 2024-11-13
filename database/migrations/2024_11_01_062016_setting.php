<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Setting extends Migration
{
    
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->id();
            $table->string('nama_setting');
            $table->string('display_name');
            $table->string('icon');
            $table->string('form');
            $table->string('value');
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    public function down()
    {
        //
    }
}
