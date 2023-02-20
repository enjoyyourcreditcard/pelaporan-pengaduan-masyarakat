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
            $table->bigInteger('user_id')                            ->unsigned();
            $table->foreign('user_id')                               ->references('id') ->on('users');
            $table->bigInteger('agency_id')                          ->unsigned();
            $table->foreign('agency_id')                             ->references('id') ->on('agencies');
            $table->bigInteger('category_id')                        ->unsigned();
            $table->foreign('category_id')                           ->references('id') ->on('categories');
            $table->string('title');
            $table->string('body');
            $table->date('date');
            $table->string('location');
            $table->string('document');
            $table->enum('status', ['open', 'on process', 'closed']) ->default('open');
            $table->date('close_date')                               ->nullable();
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
