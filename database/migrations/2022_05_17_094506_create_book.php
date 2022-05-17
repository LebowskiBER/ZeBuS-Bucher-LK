<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBook extends Migration
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
            $table->string('ISBN',10);
            $table->string('Titel',50);
            $table->integer('Total_copies');
            $table->integer('Available_copies');
            $table->decimal('Price', 8, 2);
            $table->string('BookImage',191);
            $table->string('Category',50);
            $table->string('Added_by',50);
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
