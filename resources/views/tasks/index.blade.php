@extends('layouts.app')

@section('content')
    <h1>All Tasks</h1>

    @foreach ($tasks as $task)
        <div class="card" style="margin-bottom: 20px">
            <div class="card-body">
            {{ $task->id }} | {{ $task->task_name}}
                
                <a class="btn btn-success" href="#">Complete</a>
            </div>
        </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection