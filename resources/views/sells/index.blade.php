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
                <th scope="col">sell_data</th>
                <th scope="col">Client_id</th>
                <th scope="col">Flat_id</th>
                <th scope="col">House_id</th>
              </tr>
            </thead>
            <tbody>
        @foreach($sells as $sell)
            <a href="{{ route('sells.show', $sell) }}">
                <p>
                    <span class="ms-5">{{ $sell->sell_data }}</span>
                    <span class="ms-5">{{ $sell->Client_id }}</span>
                    <span class="ms-5">{{ $sell->Flat_id }}</span>
                    <span class="ms-5">{{ $sell->House_id }}</span>
                </p>
            </a>
        @endforeach
        </tbody>
      </table>
      <a href="{{ route('sells.create') }}" class="btn btn-primary btn-lg" tabindex="-1" role="button">Create</a>
    </div>
</body>
</html> 