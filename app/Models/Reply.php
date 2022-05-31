<?php

namespace App\Models;

use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reply extends Model
{
    use HasFactory, HasUuid;

    protected $guarded = [];

    public function question(): BelongsTo
    {
        return $this->belongsTo(
            related: Question::class,
            foreignKey: 'question_uuid',
            ownerKey: 'uuid'
        );
    }
}
