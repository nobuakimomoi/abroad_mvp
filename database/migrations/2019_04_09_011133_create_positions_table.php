<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_namekana');
            $table->integer('company_id')->unsigned();
            $table->string('position_name');
            $table->string('job_desctiption');
            $table->string('enrollment_type');
            $table->string('application_method');
            $table->string('work_hour');
            $table->string('salary_bonus');
            $table->string('work_location');
            $table->string('c_and_b');
            $table->string('position_screening');
            $table->string('department_team');
            $table->timestamps();
            // 外部制約キー
            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
