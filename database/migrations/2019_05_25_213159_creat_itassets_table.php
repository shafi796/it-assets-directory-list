<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatItassetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itassets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('label');
            $table->text('description');
            $table->string('type');
            $table->string('status');
            $table->date('purchase_date');
            $table->string('purchase_owner');
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
        Schema::dropIfExists('itassets');
    }
}
