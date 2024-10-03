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
        Schema::create('project_has_locales', function (Blueprint $table) {
            $table->foreignUuid('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('locale_code', 5);
            $table->foreign('locale_code')->references('code')->on('locales')->onDelete('cascade');
            $table->boolean('language_base')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_has_locales');
    }
};
