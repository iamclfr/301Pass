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
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->integer('userId');
            $table->string('siteSlug');
            $table->string('siteName');
            $table->string('siteType');
            $table->string('siteUrl');
            $table->string('siteEmail');
            $table->string('sitePassword');
            $table->string('siteImage');
            $table->string('siteComment');
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
        Schema::dropIfExists('websites');
    }
};
