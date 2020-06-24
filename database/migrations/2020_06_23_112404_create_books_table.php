<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('name');
            $table->string('isbn');
            $table->json('authors');
            $table->integer('number_of_pages');
            $table->string('publisher');
            $table->string('country');
            $table->string('media_type');
            $table->timestamp('released');
            $table->json('characters');
            $table->json('pov_characters');
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
        Schema::dropIfExists('books');
    }
}
