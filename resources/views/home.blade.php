<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>HOME</title>
</head>
<body class="bg-dark">
  <main class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
    <div class="mb-5">
      <h2 class="text-light">MY <span class="text-info">TODOS</span></h2>
    </div>
    <div class="mb-4">
      <table class="table table-striped text-light">
        <thead>
          <tr>
            <th>id</th>
            <th>task</th>
            <th>edit</th>
            <th>delete</th>
            <th>Done</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($todos as $todo)
          @if (!$todo->done)
          <tr>
            <td class="text-light">{{ $todo->id }}</td>
              <td class="text-light">{{ $todo->taskDescription }}</td>
              <td>
                <button class="btn btn-secondary"><a href="{{ route('done', $todo->id) }}" class="text-light" style="text-decoration: none;">DONE</a></button> 
              </td>
              <td>
                <button class="btn btn-warning"><a href="{{ route('edit', $todo->id) }}" class="text-light" style="text-decoration: none;">edit</a></button> 
              </td>
              <td>
                <button class="btn btn-danger"><a href="{{ route('delete', $todo->id) }}" class="text-light" style="text-decoration: none;">delete</a></button> 
              </td>
            </tr>
            @endif
          @endforeach   
        </tbody>
      </table>
    </div>
    <div class="mb-5">
      <button class="btn btn-info"><a href="{{ route('addTodo') }}" class="text-light" style="text-decoration: none;">Add TODO</a></button>
    </div>
    <div>
      <h2 class="text-light mb-4">TODOS <span class="text-info">COMPLETED</span></h2>
    </div>
    <div>
      <table class="table table-striped text-light">
        <thead>
          <tr>
            <th>id</th>
            <th>task</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($todos as $todo)
            @if ($todo->done)
              <tr>
                <td class="text-light">{{ $todo->id }}</td>
                <td class="text-light">{{ $todo->taskDescription }}</td>
              </tr>    
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>