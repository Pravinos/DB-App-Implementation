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
    Schema::create('views', function (Blueprint $table) {
        $table->unsignedBigInteger('viewId');
        $table->datetime('viewTimestamp')->notNull();
        $table->integer('viewDuration')->notNull();
        $table->boolean('isLiked')->notNull();
        $table->unsignedBigInteger('impression_impressionId')->notNull();
        $table->unsignedBigInteger('impression_Post_postId')->notNull();
       // $table->foreign(['impression_impressionId', 'impression_Post_postId'])->references(['impressionId', 'Post_postId'])->on('impression');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('views');
    }
};
