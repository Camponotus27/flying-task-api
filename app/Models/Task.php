<?php

namespace App\Models;

class Task extends GenericModel
{
    protected $fillable = ['title','body'];

    public function scopeIndex($query)
    {
        return $query->orderByDesc('updated_at');
    }
}
