<?php

namespace App\Repositories;

use App\Models\Task;

class TaskRepo
{
    /**
     * store
     *
     * @param  mixed $description
     * @return void
     */
    public function store($description)
    {
        $task = new Task;
        $task->description = $description;
        $task->save();

        return $task;
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();

        return $task;
    }

    /**
     * update
     *
     * @param  mixed $id
     * @param  mixed $description
     * @return void
     */
    public function update($id, $description)
    {
        $task =  Task::where('id', $id)->update(['description' => $description]);

        return $task;
    }

    /**
     * all
     *
     * @return void
     */
    public function all()
    {
        $task =  Task::orderBy('id', 'asc')->get();
        return $task;
    }
}
