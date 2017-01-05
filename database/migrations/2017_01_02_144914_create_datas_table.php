<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function(Blueprint $table)
            {
                $table->string('Price Range');
                $table->string('Category');
                $table->string('Username');
                $table->string('Age');
                $table->string('Marriage status');
                $table->string('Location', 60);
                $table->rememberToken()->nullable();
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
        //
    }
}
