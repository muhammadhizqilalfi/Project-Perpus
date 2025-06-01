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
    Schema::table('reservations', function (Blueprint $table) {
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->change();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::table('reservations', function (Blueprint $table) {
        // Kembalikan ke enum lama jika perlu, atau ubah sesuai keadaan sebelumnya
        $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->change();
    });
}
};
