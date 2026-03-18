<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

<h1 class="mb-4">Edit Task</h1>

 
<form method="POST" action="/tasks/{{$task->id}}" class="mb-4">
    @csrf
    @method('PUT')
   <div class="input-group">
        <input type="text" name="title" value="{{ $task->title }}" class="form-control">
        <button type="submit" class="btn btn-primary">Update</button>
  </div>

</form>

</body>
</html>