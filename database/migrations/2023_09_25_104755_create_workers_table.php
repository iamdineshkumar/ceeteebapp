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
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('company_id')->unsigned();
            $table->foreign('company_id')->references('Company_ID')->on('company_mgmt')->onDelete('cascade');
            $table->string('branch_id')->unsigned();
            $table->foreign('branch_id')->references('Branch_ID')->on('branch_mgmt')->onDelete('cascade');
            $table->string('name', 100);
            $table->text('address');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->date('dob');
            $table->tinyInteger('gender')->comment('1-Male;2-Female;3-Other');
            $table->text('id_proof_type');
            $table->text('id_proof_no');
            $table->text('labour_classification');
            $table->text('bank_account_no');
            $table->text('bank_account_holder_name');
            $table->text('ifsc');
            $table->text('bank_name');
            $table->text('bank_branch_name');
            $table->integer('contractor_id')->unsigned();
            $table->foreign('contractor_id')->references('id')->on('contractor_master')->onDelete('cascade');
            $table->Integer('mesthiry_id')->unsigned();
            //$table->foreign('mesthiry_id')->references('id')->on('mesthiry')->onDelete('cascade');
            $table->Integer('work_unit')->unsigned();
            //$table->foreign('work_unit')->references('id')->on('work_unit')->onDelete('cascade');
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
        Schema::dropIfExists('workers');
    }
};
