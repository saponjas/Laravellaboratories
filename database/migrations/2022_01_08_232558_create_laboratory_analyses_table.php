<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoryAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laboratory_analyses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('laboratory_id')->constrained()->cascadeOnDelete();
            $table->foreignId('analysis_id')->constrained();
            $table->decimal('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laboratory_analyses');
    }
}
