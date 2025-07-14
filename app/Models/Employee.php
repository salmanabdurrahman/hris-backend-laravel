<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasUuids, SoftDeletes;

    protected $table = 'employees';

    protected $guarded = [
        'id',
    ];

    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}
