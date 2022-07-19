<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webaccounts', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('accountSlug');
            $table->string('accountName');
            $table->string('accountUrl');
            $table->string('accountEmail');
            $table->string('accountPassword');
            $table->string('accountImage');
            $table->string('accountComment');
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
        Schema::dropIfExists('webaccounts');
    }
};
