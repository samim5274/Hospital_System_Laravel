<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('digonesticsaleinfos', function (Blueprint $table) {
            $table->id();
            $table->integer('regNumber');
            $table->string('patientName');
            $table->string('dob');
            $table->string('gender');
            $table->integer('phone');
            $table->string('address');
            $table->integer('doctorid');
            $table->integer('referid');
            $table->integer('testSaleOfficerId');
            $table->integer('totalAmount');
            $table->integer('discount');
            $table->integer('received');
            $table->integer('receivedreminAmount');
            $table->string('testsalteDate');
            $table->integer('dueStatus');
            $table->integer('dueCollection');
            $table->integer('dueDiscount');
            $table->string('dueCollectDate');
            $table->integer('dueCollectOfficerId');
            $table->integer('testReturnOfficerId');
            $table->integer('testReturnStatus');
            $table->string('testReturnDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('digonesticsaleinfos');
    }
};
