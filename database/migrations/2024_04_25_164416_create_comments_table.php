<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() :void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('poem_id')->index();

            $table->foreign('poem_id')->references('id')->on('poems')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments',function (Blueprint $table) {
            $table->dropForeign(['poem_id']);
            $table->dropColumn(['poem_id']);
        });
        Schema::dropIfExists('comments');
    }
};
