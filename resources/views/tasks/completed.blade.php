@extends('layouts.app')

@section('content')
    <h1>Completed Tasks</h1>

    @if($completed->isEmpty())
        <h2>No completed tasks at this moment</h2>
    @else
        @foreach ($completed as $complete)
            <div class="card" style="margin-bottom: 20px">
                <div class="card-body">
                    {{ $complete->id }} | {{ $complete->task_name }}
                    <a class="btn btn-success" href="#">Complete</a>
                </div>
            </div>
        @endforeach
    @endif
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">New Task</a>
@endsection