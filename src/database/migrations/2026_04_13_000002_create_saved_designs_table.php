<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavedDesignsTable extends Migration
{
    public function up()
    {
        Schema::create('saved_designs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name', 255)->default('Mon Design');
            $table->json('snapshot');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('saved_designs');
    }
}
