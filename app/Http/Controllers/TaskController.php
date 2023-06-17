<?php

namespace App\Http\Controllers;

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
        $response = ['message' => "Todas las tareas", "data" => $tasks];
        return response()->json($response, 200);
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
        $response = ['message' => "Has creado una nueva tarea", "data" => $task];
        return response()->json($response, 201);
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
        $response = ['message' => "La tarea ha sido actualizada", "data" => $task];
        return response()->json($response, 200);
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
        $response = ['message' => "La tarea ha sido eliminada", "data" => $task];
        return response()->json($response, 200);
    }
}
