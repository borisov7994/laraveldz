<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Создаем таблицу 'reports'
        Schema::create('reports', function (Blueprint $table) {
            $table->id();  // Создание автоинкрементируемого столбца 'id'
            $table->string('number');
            $table->text('description');
            $table->timestamps();
            $table->unsignedBigInteger('status_id')->nullable();  // 'status_id' должен быть unsignedBigInteger
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade')->nullable();;

            $table->unsignedBigInteger('user_id')->nullable();  // 'status_id' должен быть unsignedBigInteger
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
