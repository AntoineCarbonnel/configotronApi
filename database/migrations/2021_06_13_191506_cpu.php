<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cpu extends Migration
{

    protected $connection = '';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach (config('constant.database') as $db) {

            Schema::connection($db)->create('cpu', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('long_name');
                $table->string('brand');
                $table->date('release_date');
                $table->json('options');
                $table->json('compatibility');
                $table->integer('price');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cpu');
    }
}
