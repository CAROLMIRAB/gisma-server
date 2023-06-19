<?php

namespace App\Http\Controllers;

use App\Classes\ResponsesBody;
use App\Repositories\TaskRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    /**
     * taskRepo
     *
     * @var mixed
     */
    private $taskRepo;

    /**
     * __construct
     *
     * @param  mixed $taskRepo
     * @return void
     */
    public function __construct(TaskRepo $taskRepo)
    {
        $this->taskRepo = $taskRepo;
    }

    /**
     * getAll
     *
     * Metódo que obtiene todas las tareas
     *
     * @return void
     */
    public function getAll()
    {
        $tasks = $this->taskRepo->all();
        $response = ResponsesBody::responseSuccess("Todas las tareas", 200, $tasks);
        return $response;
    }

    /**
     * create
     *
     * Metodo que guarda una tarea
     *
     * @param  mixed $request
     * @return void
     */
    public function create(Request $request)
    {
        $description = $request->description;
        $validator = Validator::make($request->all(), ['description' => 'required'], [
            'description.required' => 'La descripción no fué agregada'
        ]);

        if ($validator->fails()) {
            return ResponsesBody::responseError('Error de validación', 404, $validator->errors());
        }

        $task = $this->taskRepo->store($description);
        $response = ResponsesBody::responseSuccess("Guardaste la tarea de forma exitosa", 201, $task);
        return $response;
    }

    /**
     * update
     *
     * Metodo que actualiza una tarea
     *
     * @param  mixed $id
     * @param  mixed $request
     * @return void
     */
    public function update($id, Request $request)
    {
        $description = $request->description;
        $validator = Validator::make($request->all(), ['description' => 'required'], [
            'description.required' => 'La descripción no fué agregada'
        ]);

        if ($validator->fails()) {
            return ResponsesBody::responseError('Error de validación', 404, $validator->errors());
        }
        $task = $this->taskRepo->update($id, $description);
        $response = ResponsesBody::responseSuccess("La tarea ha sido actualizada", 200, []);
        return $response;
    }

    /**
     * delete
     *
     * Metodo que elimina una tarea
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $task = $this->taskRepo->delete($id);
        $response = ResponsesBody::responseSuccess("La tarea ha sido eliminada", 204, []);
        return $response;
    }
}
