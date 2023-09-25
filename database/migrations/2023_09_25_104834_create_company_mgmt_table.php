<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyMgmtTable extends Migration
{
    public function up()
    {
        Schema::create('company_mgmt', function (Blueprint $table) {

		$table->increments('Company_ID',5);
		$table->date('Date')->nullable()->default('NULL');
		$table->string('Company_Name',30)->nullable()->default('NULL');
		$table->string('Company_Des',100)->nullable()->default('NULL');
		$table->timestamp('created_at')->nullable()->default('NULL');
		$table->string('updated_at',25)->nullable()->default('NULL');

        });
    }

    public function down()
    {
        Schema::dropIfExists('company_mgmt');
    }
}