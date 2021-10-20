<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;

class TaskController extends ApiController
{
    protected $model = 'App\Models\Task';
    protected $rules_validation = [
        'title' => 'required|string|max:255',
        'body' => 'required|string|max:60000'
    ];

    public function __construct()
    {
        $this->setLabels("Task");
    }
}
