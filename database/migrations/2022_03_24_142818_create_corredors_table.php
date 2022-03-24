<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorredorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corredors', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('last_name');
            $table->String('DNI')->unique();
            $table->String('Dob');
            $table->String('email')->unique();
            $table->String('province');
            $table->String('city');
            $table->String('category_name');
            $table->String('route_name');
            $table->String('payment_id');
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
        Schema::dropIfExists('corredors');
    }
}
