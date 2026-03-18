<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h1 class="mb-4">Task Manager</h1>

<form method="POST" action="/tasks" class="mb-4">
    @csrf
    <div class="input-group">
        <input type="text" name="title" class="form-control" placeholder="Enter task">
        <button class="btn btn-primary">Add Task</button>
    </div>
</form>

<ul class="list-group">
    @foreach($tasks as $task)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $task->title }}

            <div>
                <a href="/tasks/{{ $task->id }}/edit" class="btn btn-sm btn-warning">Edit</a>

                <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>

</body>
</html>