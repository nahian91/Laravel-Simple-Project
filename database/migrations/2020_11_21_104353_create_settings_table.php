<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('site_description');
            $table->string('services_title');
            $table->string('services_description');
            $table->string('portfolio_title');
            $table->string('portfolio_description');
            $table->string('about_title');
            $table->string('about_description');
            $table->string('team_title');
            $table->string('team_description');
            $table->string('contact_title');
            $table->string('contact_description');
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
        Schema::dropIfExists('settings');
    }
}
