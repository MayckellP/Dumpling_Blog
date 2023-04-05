<?php
/**created a migration for created event */
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('publication_details', function (Blueprint $table) {
        $table->string('title')->default('title')->change();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('publication_details', function (Blueprint $table) {
        $table->string('title')->default(null)->change();
    });
}
};