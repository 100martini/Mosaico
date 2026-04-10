<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('design_id')->nullable()->constrained('saved_designs')->onDelete('set null');
            $table->decimal('room_width', 8, 2);
            $table->decimal('room_height', 8, 2);
            $table->integer('tile_quantity');
            $table->string('customer_name', 255);
            $table->string('customer_email', 255);
            $table->string('customer_phone', 30)->nullable();
            $table->text('delivery_address');
            $table->text('notes')->nullable();
            $table->enum('status', ['pending', 'confirmed', 'shipped'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
