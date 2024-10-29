<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    // Muestra el listado de tareas ordenadas por última actualización
    public function index()
    {
        $tasks = Task::latest('updated_at')->get();
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    // Muestra el formulario para crear una nueva tarea
    public function create()
    {
        return view('tasks.create');
    }


    // Almacena una nueva tarea en la base de datos
    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    // Muestra el formulario para editar una tarea existente
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    //Actualiza una tarea específica en la base de datos
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index');
    }

    // Elimina una tarea específica de la base de datos
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
