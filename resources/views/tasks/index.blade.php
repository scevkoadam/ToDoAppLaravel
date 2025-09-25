@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your To-Do List</h1>
        <p></p>

        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>

        <ul>
            @foreach ($tasks as $task)
                <li>
                    <p> </p>
                    <strong>{{ $task->title }}</strong>
                    <p>{{ $task->description }}</p>
                    <div class="form-group">
                    <label for="completed">Completed</label>
                    <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}>
                    </div>
                    <p></p>
                    
                    
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    <p> </p>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-secondary">Edit</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
