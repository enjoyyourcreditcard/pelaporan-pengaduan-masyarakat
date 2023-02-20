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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agency_id')                          ->unsigned()             ->nullable();
            $table->foreign('agency_id')                             ->references('id')       ->on('agencies');
            $table->string('name');
            $table->string('email')                                  ->unique();
            $table->string('nik')                                    ->nullable()             ->unique();
            $table->date('date_of_birth');
            $table->enum('gender', ['male'], 'female');
            $table->string('address');
            $table->string('phone');
            $table->string('img')                                    ->default('default.jpg');
            $table->timestamp('email_verified_at')                   ->nullable();
            $table->string('password');
            $table->enum('role', ['masyarakat', 'petugas', 'admin']) ->default('masyarakat');
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
        Schema::dropIfExists('users');
    }
};
