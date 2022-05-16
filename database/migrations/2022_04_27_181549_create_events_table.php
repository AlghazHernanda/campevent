<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id'); //foreign key ke table eventype
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('eventType');
            $table->json('eventTheme'); //bertipe json agar masuk ke database dalam bentuk array
            // $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('desc');
            $table->date('date');
            $table->string('no_hp');
            $table->string('speaker');
            $table->string('price');
            $table->string('status')->default("waiting");
            $table->timestamp('published_at')->nullable(); //buat isi postnya di publish kapan, dan default nya 0
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
        Schema::dropIfExists('events');
    }
}
