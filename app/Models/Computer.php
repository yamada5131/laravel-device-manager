<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Computer extends Model
{
    use HasFactory, HasUuids;

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
