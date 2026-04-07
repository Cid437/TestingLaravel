<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('orderline', function (Blueprint $table) {
        $table->unsignedBigInteger('orderinfo_id');
        $table->unsignedBigInteger('item_id');
        $table->integer('quantity');

        $table->primary(['orderinfo_id', 'item_id']);

        $table->foreign('orderinfo_id')
              ->references('orderinfo_id')
              ->on('orderinfo')
              ->cascadeOnDelete();

        $table->foreign('item_id')
              ->references('item_id')
              ->on('item')
              ->cascadeOnDelete();
    });
    }

    public function down()
    {
    Schema::dropIfExists('orderline');
    }
};
