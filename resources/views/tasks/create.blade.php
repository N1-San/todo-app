@extends('layouts.app')

@section('content')
    <h1>New Task</h1>
    <form method="POST" action="/tasks">
        <div class="form-group">
            @csrf
            <label for="description">Task Description</label>
            <input type="form-control" name="description">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Task</button>
        </div>
    </form>
@endsection