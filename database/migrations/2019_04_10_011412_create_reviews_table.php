<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->integer('company_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('employment_type');
            $table->string('enrollment_status');
            $table->integer('year_entry');
            $table->integer('year_resignation')->nullable();
            $table->string('work_location');            
            $table->string('review_function')->nullable();
            $table->string('review_division')->nullable();
            $table->string('review_position')->nullable();
            $table->string('user_gender');
            $table->integer('work_env_rate');
            $table->integer('screening_rate');
            $table->integer('careerup_rate');
            $table->integer('gap_rate');
            $table->integer('growth_rate');
            $table->integer('gender_equality_rate');
            $table->integer('c_and_b_rate');
            $table->integer('compliance_rate');
            $table->integer('overtime');
            $table->integer('pdo_consumption')->nullable();
            $table->string('work_env');
            $table->string('screening');
            $table->string('careerup');
            $table->string('gap');
            $table->string('growth');
            $table->string('gender_equality');
            $table->string('c_and_b');
            $table->string('compliance');
            $table->timestamps();
            // // 外部制約キー
            // $table->foreign('company_id')
            //     ->references('id')
            //     ->on('companies')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users')
            //     ->onDelete('set null')
            //     ->onUpdate('set null')->comment = 'IDが削除されても、クチコミは残す';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
