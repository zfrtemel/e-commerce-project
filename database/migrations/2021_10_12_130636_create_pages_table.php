<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('slug');
            $table->text('page_content');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->unsignedBigInteger('page_image_id')->index();
            $table->foreign('page_image_id')->references("id")->on("images")->onDelete('cascade');

            $table->integer('status');
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
        Schema::dropIfExists('pages');
    }
}
