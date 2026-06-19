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
       Schema::create('websites', function (Blueprint $table) {
            $table->id();

            $table->string('company_name');
            $table->string('domain')->unique();
            $table->string('db_name')->unique();
            $table->string('template_type');
            $table->string('manager_name');

            // شعار الشركة
            $table->string('logo')->nullable();

            $table->date('subscription_start');
            $table->date('subscription_end');

            $table->enum('status', ['active', 'expired', 'suspended'])->default('suspended');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};