<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('pembayaran', function (Blueprint $table) {
        $table->id();
        $table->string('id_pembayaran');
        $table->decimal('nominal_pembayaran');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('pembayaran');
}

};
