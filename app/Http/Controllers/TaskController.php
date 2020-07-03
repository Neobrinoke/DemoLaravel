<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function list()
    {
        $tasks = Task::all();

        return view('list', [
            'tasks' => $tasks,
        ]);
    }

    public function showCreateForm()
    {
        return view('create');
    }

    public function createTask(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'status' => ['required', 'in:1,2'],
        ]);

        $task = new Task();
        $task->name = $request->get('name');
        $task->status = $request->get('status');
        $task->save();

        return redirect()->route('list');
    }

    public function deleteTask(Task $task)
    {
        $task->delete();

        return redirect()->route('list');
    }
}
