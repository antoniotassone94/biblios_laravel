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
        Schema::dropIfExists("books");
        Schema::create("books", function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->bigInteger("author_id")->unsigned();
            $table->timestamps();
        });
        Schema::table("books",function(Blueprint $table){
            $table->foreign("author_id")->references("id")->on("authors")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("books");
    }
};