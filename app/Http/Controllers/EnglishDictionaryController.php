<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;

class EnglishDictionaryController extends ApiController
{
    protected $model = 'App\Models\EnglishDictionary';
    protected $rules_validation = [
        'word' => 'required|string|max:255',
        'pronunciation' => 'string|max:255',
        'significance' => 'string|max:60000',
        'note' => 'string|max:60000'
    ];

    public function __construct()
    {
        $this->setLabels("EnglishDictionary");
    }
}
