<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory, HasUuid;

    protected $guarded = [];

    public function replies(): HasMany
    {
        return $this->hasMany(
            related: Reply::class,
            foreignKey: 'question_uuid',
            localKey: 'uuid'
        );
    }
}
