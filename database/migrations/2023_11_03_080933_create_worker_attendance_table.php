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
        Schema::create('worker_attendance', function (Blueprint $table) {
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8mb3_general_ci';
            $table->id();
            $table->date('date');
            $table->integer('userid');
            $table->foreign('userid')->references('id')->on('ceetee_user_creation')->onDelete('cascade');
            $table->string('usertype');
            $table->string('work_type');
            $table->foreign('work_type')->references('Category_ID')->on('contractor_category')->onDelete('cascade');
            $table->string('unit');
            $table->foreign('unit')->references('Booking_ID')->on('booking_details')->onDelete('cascade');
            $table->integer('contractor_id');
            $table->foreign('contractor_id')->references('id')->on('contractor_master')->onDelete('cascade');
            $table->string('reg_contractor',25)->nullable()->default('NULL');
            $table->timestamp('login_time')->nullable();
            $table->string('expected_working_hours')->nullable();
            $table->timestamp('expected_logout_time')->nullable();
            $table->timestamp('logout_time')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->tinyInteger('status')->comment('1-Open;2-Cancelled;3-Approved;4-Hold');
            $table->text('statusRemarks')->nullable();
            $table->timestamp('statusDate')->nullable();
            $table->integer('statusBy')->nullable();
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
        Schema::dropIfExists('worker_attendance');
    }
};
