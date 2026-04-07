<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('orderinfo', function (Blueprint $table) {
        $table->id('orderinfo_id');

        $table->foreignId('customer_id')
              ->constrained('customer', 'customer_id')
              ->cascadeOnDelete();

        $table->dateTime('date_placed');
        $table->dateTime('date_shipped')->nullable();
        $table->decimal('shipping', 10, 2)->default(0);
        $table->string('status', 50);
    });
    }

    public function down()
    {
    Schema::dropIfExists('orderinfo');
    }
};
