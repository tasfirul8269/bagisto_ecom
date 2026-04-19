<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * REMOVED: Tax package not installed - this migration is skipped
     */
    public function up(): void
    {
        // Tax package removed, no foreign key to modify
    }

    /**
     * Reverse the migrations.
     * REMOVED: Tax package not installed - this migration is skipped
     */
    public function down(): void
    {
        // Tax package removed, no foreign key to modify
    }
};
