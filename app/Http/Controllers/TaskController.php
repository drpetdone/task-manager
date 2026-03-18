<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //add new record
    public function store(Request $request)
    {
        Task::create([
            'title' => $request->title
        ]);

        return redirect('/tasks');
    }
    //get and display record
    public function index()
    {
        $tasks = Task::all();
        return view('tasks', compact('tasks'));
    }

    //delete record
    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return redirect('/tasks');
    }

    //find and display  task for editing
    public function edit($id)
    {
        $task = Task::findOrFail($id);
        return view('edit', compact('task'));
    }
    //update task
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update(
            [
                'title'=>$request->title
            ]
        );
        return redirect('/tasks');
    }
}
