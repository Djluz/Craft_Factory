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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->decimal('subtotal');
            $table->decimal('discount')->default(0);
            $table->decimal('tax');
            $table->decimal('sf');
            $table->decimal('total');
            $table->string('fname');
            $table->string('lname');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->integer('zip')->default(4);
            $table->bigInteger('phone')->default(11);
            $table->string('email');
            $table->text('ordernotes')->nullable();
            $table->enum('status',['ordered','fordelivery','delivered','canceled'])->default('ordered');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
