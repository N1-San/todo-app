<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;

class TasksController extends Controller
{
    public function index(){
        $tasks = tasks::all();
        // dd($tasks);
        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }
}
