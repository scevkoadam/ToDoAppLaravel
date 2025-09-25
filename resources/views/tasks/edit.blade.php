@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Task Title</label>
                <input type="text" name="title" class="form-control" value="{{ $task->title }}" required>
            </div>
            <p></p>

            <div class="form-group">
                <label for="description">Task Description</label>
                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
            </div>
            
            <p></p>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    </div>
@endsection
