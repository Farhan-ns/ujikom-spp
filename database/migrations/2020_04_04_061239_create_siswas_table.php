<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->char('nisn', 10)->primary();
            $table->char('nis', 10);
            $table->string('password');
            $table->string('nama', 35);
            $table->text('alamat');
            $table->string('no_telpon', 20);
            $table->bigInteger('spp_id');
            $table->bigInteger('kelas_id');
            $table->rememberToken();
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
        Schema::dropIfExists('siswas');
    }
}
