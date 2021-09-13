<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use App\Models;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\GenericCollection;
use App\Http\Resources\GenericResource;

class ApiController extends Controller
{
    use ApiResponser;

    private $label_model = "Model";
    private $label_model_p = "Models";

    protected $model;

    protected $rules_validation = [];
    private const NO_MODEL_MESSAGE = "Bad Model";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!$this->model) {
            return $this->noModelResponse();
        }
        $local_models = $this->model::paginate(100);
        return $this->successResponse(new GenericCollection($local_models));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$this->model) {
            return $this->noModelResponse();
        }

        $local_model = $this->model::find($id);

        if ($local_model) {
            return $this->successResponse(new GenericResource($local_model));
        }
        return $this->errorResponse($this->label_model . ' not found', 404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$this->model) {
            return $this->noModelResponse();
        }

        $validator = $this->requestValidation($request);

        if ($validator->fails()) {
            return $this->errorResponse($validator->messages(), 422);
        }

        $loca_model = $this->model::create(request()->all());

        return $this->successResponse($loca_model, $this->label_model . ' Created', 201);
    }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request $request
      * @param  \App\Models\Task         $task
      * @return \Illuminate\Http\Response
      */
    public function update(Request $request, $id)
    {
        if (!$this->model) {
            return $this->noModelResponse();
        }

        $validator = $this->requestValidation($request);

        if ($validator->fails()) {
            return $this->errorResponse($validator->messages(), 422);
        }

        $loca_model = $this->model::find($id);

        if ($loca_model) {
            $loca_model->fill(request()->all());
            $loca_model->save();
            return $this->successResponse(new GenericResource($loca_model), $this->label_model . '  Update successfully');
        }
        return $this->errorResponse($this->label_model . ' not found', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$this->model) {
            return $this->noModelResponse();
        }

        $local_model = $this->model::find($id);

        if ($local_model) {
            $local_model->delete();
            return $this->successResponse(null, $this->label_model . '  Deleted');
        }
        return $this->errorResponse($this->label_model . ' not found', 404);
    }

    private function requestValidation($request)
    {
        return Validator::make(request()->all(), $this->rules_validation);
    }

    private function noModelResponse()
    {
        return $this->errorResponse(self::NO_MODEL_MESSAGE, 422);
    }

    protected function setLabels($label_model, $label_model_p = "")
    {
        $this->label_model = $label_model;

        if ($label_model == "") {
            $label_model_p = $label_model . "s";
        }

        $this->label_model_s = $label_model_p;
    }
}
