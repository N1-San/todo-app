<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('id', 'desc')->get();
        // dd($tasks);
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $task = Task::create([
            'task_name' => $request->input('description'),
        ]);
        session()->flash('taskId', $task->id);
        return redirect('/');
        //         return response()->json(['task_id' => $task->id, 'message' => 'New task created successfully!']);
// }
        // return redirect('/');
    }
    public function completed(){

        $completed = Task::where('is_completed', true)->get();

        // dd($completed);

        return view('tasks.completed',[
            'completed' => $completed
        ]);
    }
}
