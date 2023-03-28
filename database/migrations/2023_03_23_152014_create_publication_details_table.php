<?php
/**created a migration for created event */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('publication_details', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('image');
            $table->string('date');
            $table->string('place');
            $table->integer('id_reference_publication');
            $table->timestamps();
            
        });
    }
  
    public function down(): void
    {
        Schema::dropIfExists('publication_details');
    }
};
