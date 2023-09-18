<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
$table->string('name');
$table->float('price');
$table->float('discount');
$table->longText('description');
$table->json('ingredients');
$table->longText('dosage');
$table->string('origin');
$table->timestamps();//
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
