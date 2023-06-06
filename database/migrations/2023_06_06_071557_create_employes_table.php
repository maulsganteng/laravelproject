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
        Schema::create('employe', function (Blueprint $table) {
            $table->integer("id");
            $table->integer("employeid");
            $table->string("fisrtname");
            $table->string("middlename");
            $table->string("lastname");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe');
    }
};
