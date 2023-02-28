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
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">fullName</th>
                <th scope="col">number</th>
                <th scope="col">email</th>
              </tr>
            </thead>
      </table>
      @foreach($clients as $client)
      <a href="{{ route('clients.show', $client) }}">
          <table class="table">
            <tr>  
              <th scope="col">{{ $client->fullName }}</th>
              <th class="col">{{ $client->number }}</th>
              <th class="col">{{ $client->email }}</th>
            </tr>
          </table>
      </a>
  @endforeach
      <a href="{{ route('clients.create') }}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Create</a>
    </div>
</body>
</html> 