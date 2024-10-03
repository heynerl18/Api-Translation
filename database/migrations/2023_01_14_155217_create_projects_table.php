<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            //$table->foreignUuid('organization_id')->references('id')->on('organizations')->onDelete('cascade');
            //$table->foreignUuid('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('base_locale', 5);
            $table->foreign('base_locale')->references('code')->on('locales')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->json('settings')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
