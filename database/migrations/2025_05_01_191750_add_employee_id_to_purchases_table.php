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
        Schema::table('purchases', function (Blueprint $table) {
            // إضافة العمود employee_id
            $table->unsignedBigInteger('employee_id')->nullable()->constrained('employees')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchases', function (Blueprint $table) {
            // حذف العمود employee_id لو احتاجنا نرجع التغيير
            $table->dropForeign(['employee_id']);
            $table->dropColumn('employee_id');
        });
    }
};
