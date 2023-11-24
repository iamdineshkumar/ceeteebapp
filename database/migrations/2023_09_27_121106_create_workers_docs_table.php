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
            $table->string('doc_name',255)->nullable()->default('NULL');
            $table->string('doc_type',255)->nullable()->default('NULL');
            $table->string('doc_location',255)->nullable()->default('NULL');
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
