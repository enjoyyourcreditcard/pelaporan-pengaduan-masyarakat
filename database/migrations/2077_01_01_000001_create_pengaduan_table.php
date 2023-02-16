<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')                                     ->unsigned();
            $table->foreign('user_id')                                        ->references('id') ->on('users');
            $table->string('laporan');
            $table->string('img')                                             ->nullable();
            $table->enum('status', ['draft', 'open', 'on process', 'closed']) ->default('draft');
            $table->date('close_date')                                        ->nullable();
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
        Schema::dropIfExists('pengaduan');
    }
};
