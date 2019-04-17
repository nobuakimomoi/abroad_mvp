<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('namekana');
            $table->string('size')->nullable();
            $table->string('hqAddress');
            $table->string('companyType');
            $table->string('foundedYear');
            $table->string('revenue')->nullable();
            $table->string('industry');
            $table->string('desctiption');
            $table->string('internationalWorkersPercentage')->nullable();
            $table->string('pyHiringResult')->nullable();
            $table->string('menWomenRatio')->nullable();
            $table->string('japaneselevel')->nullable();
            $table->string('hiringReason')->nullable();
            $table->string('persona')->nullable();
            $table->string('companyURL');
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
        Schema::dropIfExists('companies');
    }
}
