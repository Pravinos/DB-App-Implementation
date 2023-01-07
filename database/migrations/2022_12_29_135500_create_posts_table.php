<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Posts;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('postId');
            $table->string('title', 100)->notNullable();
            $table->integer('duration')->notNullable();
            $table->string('description', 5000)->nullable();
            $table->enum('resolution', ['240p', '360p', '480p', '720p', '1080p', '4K'])->notNullable();
            $table->unsignedBigInteger('Channel_channelId')->notNullable();
            //$table->foreignId('channel_id')->constrained()->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};
