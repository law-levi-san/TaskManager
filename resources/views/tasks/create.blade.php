<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <h1>Create Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <br>
        <label>Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <label>Status:</label>
        <select name="status">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
        </select>
        <br>
        <button type="submit">Create</button>
    </form>
</body>
</html>