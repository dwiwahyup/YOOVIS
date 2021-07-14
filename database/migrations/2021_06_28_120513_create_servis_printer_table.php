<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServisPrinterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servis_printer', function (Blueprint $table) {
            $table->id();
            $table->string('merk_printer');
            $table->string('type_printer');
            $table->string('kerusakan_printer');
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
        Schema::dropIfExists('servis_printer');
    }
}
