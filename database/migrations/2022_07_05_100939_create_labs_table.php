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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('code');
            $table->string('name');
            $table->text('description')->nullable();
            $table->double('price_hourly');
            $table->string('path_file')->nullable();
            $table->boolean('is_available')->default(false);
            $table->time('open_hour');
            $table->time('close_hour');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labs');
    }
};
