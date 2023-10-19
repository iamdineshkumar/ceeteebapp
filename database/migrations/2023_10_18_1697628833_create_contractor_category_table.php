<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorCategoryTable extends Migration
{
    public function up()
    {
        Schema::create('contractor_category', function (Blueprint $table) {

		$table->string('Category_ID',12)->nullable(false)->primary();
		$table->string('Category_Name',50);
		$table->string('Print Name',50);
		$table->string('Description',200);
        $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contractor_category');
    }
}