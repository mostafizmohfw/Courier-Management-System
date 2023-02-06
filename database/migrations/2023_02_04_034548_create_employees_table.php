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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('branch_id');
            $table->string('dob');
            $table->string('doj');
            $table->string('mobile');
            $table->string('nid')->unique();
            $table->string('job_id')->unique();
            $table->string('address');
            $table->tinyInteger('status')->comment('0=retired, 1=active');
            $table->tinyInteger('employee_type')->comment('1=Admin, 2=Hub manager, 3 = driver, 4=deliveryman, 5= reciptionist');
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
