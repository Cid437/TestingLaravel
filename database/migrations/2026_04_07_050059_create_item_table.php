<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('item', function (Blueprint $table) {
        $table->id('item_id');
        $table->string('description');
        $table->decimal('cost_price', 10, 2);
        $table->decimal('sell_price', 10, 2);
        $table->string('image')->nullable();
    });
    }

    public function down()
    {
    Schema::dropIfExists('item');
    }
};
