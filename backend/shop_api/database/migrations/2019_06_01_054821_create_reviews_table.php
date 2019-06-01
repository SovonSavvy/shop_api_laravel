<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('reviews')){
            Schema::create('reviews', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('product_id')->unsigned()->nullable();
                $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
                $table->string('customer');
                $table->text('review');
                $table->integer('star');
                $table->timestamps();
            });

            // Schema::table('reviews', function($table) {
                
            // });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
