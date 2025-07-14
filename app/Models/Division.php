<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasUuids, SoftDeletes;

    protected $table = 'divisions';

    protected $guarded = [
        'id',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
