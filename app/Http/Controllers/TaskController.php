<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function index($id)
    {
        return view('edit', [
            'task' => Task::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);
        $task->name = request('name');
        $task->desc = request('desc');
        $task->save();
        return redirect(route('main'));
    }
}
