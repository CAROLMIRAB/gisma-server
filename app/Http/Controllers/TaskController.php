<?php

namespace App\Http\Controllers;

use App\Models\ResponsesBody;
use App\Repositories\TaskRepo;
use Illuminate\Http\Request;

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
        $task = $this->taskRepo->store($description);
        $response = ResponsesBody::responseSuccess("Todas las tareas", 201, []);
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
        return response()->json($response, 200);
    }
}
