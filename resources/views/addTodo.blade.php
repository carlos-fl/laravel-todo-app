<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <main style="height: 100vh" class="d-flex flex-column justify-content-center align-items-center">
    <div style="width: 40%; height: 60%; box-shadow: rgba(0,0,0,.35) 0px 5px 15px">
      <form method="POST" action="{{ route('addTodoDB') }}" class="p-4">
        @csrf
        <div>
          <input type="text" name="desc" placeholder="description" class="p-2 form-control">
        </div>
        <div class="mt-5">
          <button class="btn btn-primary" type="submit">Add</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>