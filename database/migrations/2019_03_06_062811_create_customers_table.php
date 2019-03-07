<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('CustomerId')->autoIncrement();
            $table->char('CustFirstName', 25);
            $table->char('CustLastName', 25);
            $table->char('CustAddress', 75);
            $table->char('CustCity', 50);
            $table->char('CustProv', 2);
            $table->char('CustPostal', 7);
            $table->char('CustCountry', 25)->nullable();
            $table->char('CustHomePhone', 20)->nullable();
            $table->char('CustBusPhone', 20);
            $table->char('CustEmail', 50);
            $table->integer('AgentId')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
