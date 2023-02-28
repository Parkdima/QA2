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
                <th scope="col">Square</th>
                <th scope="col">Floor</th>
                <th scope="col">rooms</th>
              </tr>
            </thead>
        </table>
        @foreach($flats as $flat)
      <a href="{{ route('flats.show', $flat) }}">
          <table class="table">
            <tr>  
              <th scope="col">{{ $flat->Square }}</th>
              <th class="col">{{ $flat->floor_id }}</th>
              <th class="col">{{ $flat->rooms }}</th>
            </tr>
          </table>
      </a>
  @endforeach
        <a href="{{ route('flats.create') }}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Create</a>
    </div>
</body>
</html> 