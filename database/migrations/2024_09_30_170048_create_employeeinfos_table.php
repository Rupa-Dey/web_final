<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeinfos', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('job_title',100);
            $table->date('joining_date');
            $table->double('salary');
            $table->string('email',255)->unique()->nullable();
            $table->string('mobile_no')->unique();
            $table->text('address');
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
        Schema::dropIfExists('employeeinfos');
    }
}
//G:\42\Lab\Lab_practise/lab3132_college_2.0/database/migrations/2024_09_30_170048_create_employeeinfos_table.php