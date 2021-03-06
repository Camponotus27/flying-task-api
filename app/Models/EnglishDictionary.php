<?php

namespace App\Models;

class EnglishDictionary extends GenericModel
{
    protected $fillable = ['word','pronunciation', 'significance', 'note'];
    protected $parameters_to_search = ['word','pronunciation', 'significance', 'note'];
    
    public function scopeIndex($query)
    {
        return $query->orderByDesc('updated_at');
    }
}
