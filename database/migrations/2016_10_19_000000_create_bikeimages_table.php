<?php

use App\BikeImage;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBikeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('url');
            $table->integer('sort');
            $table->integer('bikeId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bikeimage');
    }
}
