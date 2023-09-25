<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractorMasterTable extends Migration
{
    public function up()
    {
        Schema::create('contractor_master', function (Blueprint $table) {

		$table->integer('id',11);
		// $table->primary('id');
		$table->string('Contractor_ID',50)->nullable()->default('NULL');
		$table->string('Contractor_Name',50)->nullable()->default('NULL');
		$table->string('Contractor_J_Date',50)->nullable()->default('NULL');
		$table->string('Contractor_Category',25)->nullable()->default('NULL');
		$table->string('Experience',50)->nullable()->default('NULL');
		$table->string('previous_History',50)->nullable()->default('NULL');
		$table->string('reffered_by',50)->nullable()->default('NULL');
		$table->string('Pan_No',14)->nullable()->default('NULL');
		// $table->bigInteger('Account_No',14)->nullable()->default('NULL');
		$table->string('Bank_Name',100)->nullable()->default('NULL');
		$table->string('IFSC',25)->nullable()->default('NULL');
		$table->string('Ac_H_Name',100)->nullable()->default('NULL');
		$table->string('Address',250)->nullable()->default('NULL');
		$table->string('City',25)->nullable()->default('NULL');
		// $table->bigInteger('Mob_Phone',14)->nullable()->default('NULL');
		// $table->integer('Fax',10)->nullable()->default('NULL');
		$table->string('EMail',25)->nullable()->default('NULL');
		// $table->integer('Contact_No',15)->nullable()->default('NULL');
		$table->string('Contractor_Status',20)->nullable()->default('NULL');
		$table->string('Remarks',250)->nullable()->default('NULL');
		$table->string('ledger_name',200)->nullable()->default('NULL');
		$table->string('Company_ID',20)->nullable()->default('NULL');
		$table->string('Branch_ID',20)->nullable()->default('NULL');
		$table->timestamp('created_at')->default('current_timestamp');
		$table->timestamp('updated_at')->nullable()->default('NULL');


        });
    }

    public function down()
    {
        Schema::dropIfExists('contractor_master');
    }
}