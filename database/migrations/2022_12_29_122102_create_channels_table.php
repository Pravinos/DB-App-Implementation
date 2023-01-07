<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Channels;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->unsignedBigInteger('channelId');
            $table->string('channelName', 45);
            $table->date('creationDate');
            $table->string('channelDescription', 5000)->nullable();
            $table->unsignedBigInteger('User_userId')->nullable();
            //$table->foreignId('user_id')->constrained()->onDelete('restrict')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('channels');
    }

};
