@extends('layouts.app')

@section('content')
<div class="container">
    <header>
        <h1>Task Manager</h1>
        <nav>
            <ul>
                <li><a href="{{ route('tasks.index') }}">Home</a></li>
                <li><a href="{{ route('tasks.create') }}">Add Task</a></li>
            </ul>
        </nav>
    </header>

    <div class="tasks-list">
        @foreach ($tasks as $task)
            <div class="task-item">
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description }}</p>
                <p>Status: {{ $task->status }}</p>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn">Edit</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</div>

<style>
    /* General styles for the app */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    header {
        background-color: #007bff;
        color: #fff;
        padding: 10px 0;
        text-align: center;
    }

    header h1 {
        margin: 0;
    }

    nav ul {
        list-style: none;
        padding: 0;
    }

    nav ul li {
        display: inline;
        margin-right: 15px;
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
    }

    nav ul li a:hover {
        text-decoration: underline;
    }

    .tasks-list {
        margin-top: 20px;
    }

    .task-item {
        background-color: #fff;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }

    .task-item h3 {
        margin: 0 0 10px;
    }

    .task-item p {
        margin: 5px 0;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        cursor: pointer;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    form {
        display: inline;
    }
</style>
@endsection