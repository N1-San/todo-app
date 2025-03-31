@extends('layouts.app')

@section('content')
    <h1>All Tasks</h1>

    @foreach ($tasks as $task)
        <div class="card @if ($task->isCompleted()) border-success @endif" style="margin-bottom: 20px">
            <div class="card-body">
                <p>
                    @if ($task->isCompleted())
                        <span class="badge badge-success">Completed</span>
                    @endif
                    {{ $task->id }} | {{ $task->task_name}}
                </p>
                @if (!$task->isCompleted())
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <button class="btn btn-info" input="submit">Complete</button>
                    </form>
                @else
                <form action="/tasks/{{ $task->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" input="submit">Delete</button>
                    </form>
                @endif
            </div>
        </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection