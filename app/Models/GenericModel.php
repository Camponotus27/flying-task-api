<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class GenericModel extends GenericModel
{
    use HasFactory;
    use SoftDeletes;

    public function scopeIndex($query)
    {
        return $query;
    }
}
