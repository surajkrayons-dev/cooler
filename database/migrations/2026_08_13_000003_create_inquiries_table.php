<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 120);
            $table->string('company_name', 160);
            $table->string('email', 190);
            $table->string('phone', 30)->nullable();
            $table->unsignedBigInteger('quantity');
            $table->string('product_type', 100);
            $table->text('message')->nullable();
            $table->timestamps();

            $table->index('email');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
