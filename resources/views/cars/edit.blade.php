<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars - Edit</title>
</head>
<body>
        <h1>Edit Car Data</h1>
        <form method="POST" action="{{ route('cars.update', $cars->car_id) }}">
            @csrf
            <div>
                <label for="car_name">Name</label>
                <input type="text" value="{{ $cars->car_name }}" name="car_name" id="car_name" required="">
            </div>
            <div>
                <label for="car_price">Price</label>
                <input type="number" value="{{ $cars->car_price }}" name="car_price" id="" required="">
            </div>
            <div>
                <label for="car_stock">Stock</label>
                <input type="number" value="{{ $cars->car_stock }}" name="car_stock" id="car_stock" required="">
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </form>
</body>
</html>