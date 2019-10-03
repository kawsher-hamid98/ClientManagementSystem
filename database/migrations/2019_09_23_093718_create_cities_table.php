<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customerName');
            $table->string('customerFileNo') -> unique();
            $table->string('customerPhoneNo');
            $table->string('additionalPhoneNo')->nullable();
            $table->string('customerFatherName');
            $table->string('customerMotherName');
            $table->string('customerCurrentAddress');
            $table->string('customerPermanentAddress');
            $table->string('preferenceType');
            $table->string('apartmentType')->nullable();
            $table->string('apartmentSize')->nullable();
            $table->string('commercialType')->nullable();
            $table->string('commercialSize')->nullable();
            $table->string('pricePerSqFt');
            $table->string('downPayment');
            $table->string('totalPrice');
            $table->string('totalInstallment');
            $table->string('dueAmount');
            $table->string('nextPayment');
            $table->string('remainingBalance');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}

