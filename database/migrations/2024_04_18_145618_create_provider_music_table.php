<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProviderMusicTable extends Migration {
    public function up()
    {
        Schema::create('provider_music', function (Blueprint $table) {
            $table->unsignedBigInteger('provider_id');
            $table->unsignedBigInteger('music_id');

            $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreign('music_id')->references('id')->on('music')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('provider_music');
    }
};
