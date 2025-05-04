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
        Schema::table('sales', function (Blueprint $table) {
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('set null');

            $table->decimal('price_unit', 10, 2)->nullable(); // سعر الوحدة بدون ربح
            $table->decimal('price_profit', 10, 2)->nullable(); // سعر الوحدة بالربح

            $table->dateTime('date_of_pay')->nullable(); // تاريخ الدفع
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales', function (Blueprint $table) {
            $table->dropForeign(['supplier_id']);
            $table->dropColumn(['supplier_id', 'price_unit', 'price_profit', 'date_of_pay']);
        });
    }
};
