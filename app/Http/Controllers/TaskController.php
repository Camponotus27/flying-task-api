<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GenericResource;
use App\Http\Resources\GenericCollection;

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
