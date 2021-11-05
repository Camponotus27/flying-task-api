<?php

namespace App\Models;

class Task extends GenericModel
{
    protected $fillable = ['title','body'];
    protected $parameters_to_search = ['title','body'];

    public function scopeIndex($query)
    {
        return $query->orderByDesc('updated_at');
    }
}
