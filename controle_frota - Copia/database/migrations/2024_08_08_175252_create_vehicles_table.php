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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('vehicle_type_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('brand'); //marca
            $table->string('model');//modelo
            $table->string('prefix')->unique();//prefixo
            $table->boolean('characterized')->default(true);// caracterizada
            $table->string('asset_number')->unique()->nullable(); //numero de patrimonio
            $table->string('odometer')->unique()->nullable();
            $table->boolean('active')->default(true);
            $table->string('plate')->unique(); //placa
            $table->year('year'); //preco fipe
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
