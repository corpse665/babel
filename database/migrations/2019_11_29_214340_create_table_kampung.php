<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKampung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kampung', function (Blueprint $table) {
            $table->increments('kampung_id');
            $table->string('judul',255);
            $table->text('isi');
            $table->text('gambar');
            $table->integer('user_id');
            $table->string('alamat',255);
            $table->string('fasilitas_umum',255);
            $table->string('fasilitas_wisata',255);
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
        Schema::table('kampung', function (Blueprint $table) {
            //
        });
    }
}
