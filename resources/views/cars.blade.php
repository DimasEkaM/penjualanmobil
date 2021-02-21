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
    <table border="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($mobil as $c)
		<tr>
			<td>{{ $c->car_id }}</td>
			<td>{{ $c->car_name }}</td>
			<td>{{ $c->car_price }}</td>
			<td>{{ $c->car_stock }}</td>
			<td>
				<a href="/cars/edit/{{ $c->car_id }}">Edit</a>
				|
				<a href="/cars/hapus/{{ $c->car_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>