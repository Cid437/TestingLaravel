<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('stock', function (Blueprint $table) {
        $table->unsignedBigInteger('item_id')->primary();
        $table->integer('quantity')->default(0);

        $table->foreign('item_id')
              ->references('item_id')
              ->on('item')
              ->cascadeOnDelete();
    });
    }

    public function down()
    {
    Schema::dropIfExists('stock');
    }
};
