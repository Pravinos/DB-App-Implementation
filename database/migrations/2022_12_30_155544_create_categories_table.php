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
        Schema::create('categories', function (Blueprint $table) {
            $table->enum('category', ['Sports', 'Cooking', 'Arts', 'Music', 'Gaming', 'Educational', 'Finance', 'News', 'Cinema', 'Comedy', 'Technology', 'Other'])->primary();
            $table->unsignedBigInteger('post_postId');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
