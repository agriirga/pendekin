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
        Schema::create('shorted_links', function (Blueprint $table) {
            $table->id();
            $table->string('long_url');
            $table->string('short_url', 7);
            $table->integer('counter')->default(0);
            $table->timestamp('last_visit')->nullable();
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
        Schema::dropIfExists('shorted_links');
    }
};
