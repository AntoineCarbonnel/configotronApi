<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gpu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        foreach (config('constant.database') as $db) {
            Schema::connection($db)->create('gpu', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('model');
                $table->string('long_name');
                $table->string('subsidiary brand');
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
