<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cartridges', function (Blueprint $table) {
            $table->id();
            $table->string('cartridge_name');
            $table->string('model');
            $table->string('printer_name');
            $table->string('vendor');
            $table->date('purchase_date')->nullable();
            $table->integer('refill_count')->default(0);
            $table->enum('status', [
                'In Stock',
                'Installed',
                'Empty',
                'Repair'
            ])->default('In Stock');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cartridges');
    }
};