<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class GenericModel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $parameters_to_search = [];

    public function scopeSearch($query, $search)
    {
        foreach($this->parameters_to_search as $parameter) {
            $query = $query->orWhere($parameter, 'like', '%' . $search . '%');
        }

        return $query;
    }

    public function scopeIndex($query)
    { 
        return $query;
    }
}
