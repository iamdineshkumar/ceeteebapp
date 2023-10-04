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
        Schema::create('workers_docs', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('workerId')->unsigned();
            $table->foreign('workerId')->references('id')->on('workers')->onDelete('cascade');
            $table->timestamp('date')->useCurrent();
            $table->string('doc_name',30)->nullable()->default('NULL');
            $table->string('doc_type',30)->nullable()->default('NULL');
            $table->string('doc_location',30)->nullable()->default('NULL');
            $table->text('remarks')->nullable();
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
        Schema::dropIfExists('workers_docs');
    }
};
