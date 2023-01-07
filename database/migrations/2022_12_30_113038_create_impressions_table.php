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
        Schema::create('impressions', function (Blueprint $table) {
            $table->unsignedBigInteger('impressionId');
            $table->enum('trafficType', ['Main Page', 'Trending Page', 'Subscriptions', 'Search Result', 'Playlist', 'External Source'])->notNull();
            $table->boolean('isRecommended')->notNull();
            $table->unsignedBigInteger('Post_postId')->notNull();
            $table->unsignedBigInteger('User_userId')->notNull();
            //$table->primary(['impressionId', 'Post_postId']);
            // $table->foreign('Post_postId')->references('postId')->on('post');
            // $table->foreign('User_userId')->references('userId')->on('user');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impressions');
    }
};
