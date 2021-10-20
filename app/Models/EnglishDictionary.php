<?php

namespace App\Models;

class EnglishDictionary extends GenericModel
{
    protected $fillable = ['word','pronunciation', 'significance', 'note'];
}
