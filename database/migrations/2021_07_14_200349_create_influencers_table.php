<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->string('influencer_name');
            $table->string('influencer_location')->nullable();
            $table->string('instagram_link');
            $table->string('facebook_link');
            $table->string('youtube_link');
            $table->string('influencer_picture');
            $table->string('influencer_email')->unique();
            $table->string('influencer_mobile')->unique();
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
        Schema::dropIfExists('influencers');
    }
}
