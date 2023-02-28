<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('houses.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Название дома</label>
                <input type="text" class="form-control" name="name" required id="exampleFormControlInput1" placeholder="Введите название дома ">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Цену за 1кв/м</label>
                <textarea class="form-control" required name="cost" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Date</label>
                <input type="date" class="form-control" required name="data" id="exampleFormControlInput1" placeholder="Введите кол-во этажей">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Этажи</label>
                <input type="text" class="form-control" required name="floors" id="exampleFormControlInput1" placeholder="Введите кол-во этажей">
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>