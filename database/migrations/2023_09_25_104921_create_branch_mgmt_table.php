<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchMgmtTable extends Migration
{
    public function up()
    {
        Schema::create('branch_mgmt', function (Blueprint $table) {

		$table->string('Branch_ID',7)->nullable(false)->primary();
		$table->string('Company_ID',50);
		$table->string('BranchName',50);
		$table->string('Branch Description',150);
		$table->string('BranchType',25)->nullable()->default('NULL');
		$table->string('BranchAddress',100)->nullable()->default('NULL');
		$table->string('BTaluk',25)->nullable()->default('NULL');
		$table->string('BDistrict',25)->nullable()->default('NULL');
		$table->string('BState',25)->nullable()->default('NULL');
		$table->string('Country',25)->nullable()->default('NULL');
		$table->string('Branch Head',30)->nullable()->default('NULL');
		// $table->integer('Phone',11)->nullable()->default('NULL');
		// $table->integer('Fax',11)->nullable()->default('NULL');
		$table->string('Email',25)->nullable()->default('NULL');
		$table->date('Date')->nullable()->default('NULL');
		$table->string('branch_logo')->nullable()->default('NULL');
		$table->string('branch_details',1024)->nullable()->default('NULL');
		$table->timestamp('created_at')->default('current_timestamp');
		$table->timestamp('updated_at')->nullable()->default('NULL');
        });
    }

    public function down()
    {
        Schema::dropIfExists('branch_mgmt');
    }
}