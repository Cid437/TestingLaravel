<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
    Schema::create('customer', function (Blueprint $table) {
        $table->id('customer_id');

        $table->foreignId('user_id')
              ->constrained('users')
              ->cascadeOnDelete();

        $table->string('lname');
        $table->string('fname');
        $table->string('addressline');
        $table->string('zipcode', 20);
        $table->string('phone', 20);
        $table->string('image_path')->nullable();
    });
    }

    public function down()
    {
    Schema::dropIfExists('customer');
    }
};
