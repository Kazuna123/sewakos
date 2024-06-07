<?php

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
        Schema::table('kos', function (Blueprint $table) {
            $table->string('telepon', 20)->nullable();
        });
    }

    public function down()
    {
        Schema::table('kos', function (Blueprint $table) {
            $table->dropColumn('telepon');
        });
    }

};
