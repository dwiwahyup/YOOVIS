<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisLaptopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis_laptop', function (Blueprint $table) {
            $table->id();
            $table->string('merk_laptop');
            $table->string('type_laptop');
            $table->string('kerusakan_laptop');
            $table->string('layanan');
            $table->string('promo');
            $table->string('lokasi_anda');
            $table->string('total');
            $table->string('pembayaran');
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
        Schema::dropIfExists('servis_laptop');
    }
}
