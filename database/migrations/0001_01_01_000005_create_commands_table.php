<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('commands', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->foreignUuid('computer_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('room_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->text('type');
            $table->jsonb('params')->nullable();
            $table->text('status');
            $table->boolean('is_group_command')->default(false);
            $table->timestampTz('completed_at')->nullable();
            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('commands');
    }
};
