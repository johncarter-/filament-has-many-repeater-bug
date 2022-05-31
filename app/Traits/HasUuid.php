<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait HasUuid
{
    // Inspired by https://github.com/JamesHemery/laravel-uuid/blob/master/src/HasUuid.php

    public function getKeyName()
    {
        return 'uuid';
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function getIncrementing()
    {
        return false;
    }

    protected static function bootHasUuid()
    {
        static::creating(function (Model $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Uuid::uuid4();
            }
        });
    }
}
