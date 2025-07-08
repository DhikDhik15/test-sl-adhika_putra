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
        Schema::table('users', function (Blueprint $table) {
            Schema::table('users', function (Blueprint $table) {
                // Rename kolom
                $table->renameColumn('position', 'position_id');
                $table->renameColumn('department', 'department_id');
            });

            Schema::table('users', function (Blueprint $table) {
                // Ubah tipe kolom setelah di-rename
                $table->unsignedBigInteger('position_id')->nullable()->change();
                $table->unsignedBigInteger('department_id')->nullable()->change();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('position_id', 'position');
            $table->renameColumn('department_id', 'department');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->string('position')->nullable()->change();
            $table->string('department')->nullable()->change();
        });
    }
};
