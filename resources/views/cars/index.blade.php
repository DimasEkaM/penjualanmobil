<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
    <h1>Cars</h1>
    <center>
        <div>
            <a href="{{ route('cars.create') }}">Tambah Data</a>
        </div>

    <table border="1" width="800">
		<tr>
			<th>ID</th>
			<th>Nama Mobil</th>
			<th>Harga Mobil</th>
			<th>Stock Mobil</th>
			<th>Opsi</th>
		</tr>
		@foreach($cars as $c)
		<tr>
			<td>{{ $c->car_id }}</td>
			<td>{{ $c->car_name }}</td>
			<td>{{ $c->car_price }}</td>
			<td>{{ $c->car_stock }}</td>
			<td>
            <a href="{{ route('cars.edit', $c->car_id) }}">
            <button>Edit</button></a>
            <a href="{{ route('cars.destroy', $c->car_id) }}" 
            onclick="return confirm('hapus data {{ $c->car_name }} ')"><button>Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>
    </center>
</body>
</html>