<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>

	
	<h1>Library db</h1>

	<a href="/books/add"> + add new book</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>id</th>
			<th>judul</th>
			<th>penerbit</th>
			<th>thn terbit</th>
            <th>pengarang</th>
			<th>Option</th>
		</tr>
		@foreach($books as $b)
		<tr>
			<td>{{ $b->id }}</td>
			<td>{{ $b->judul }}</td>
			<td>{{ $b->penerbit }}</td>
			<td>{{ $b->tahun_terbit }}</td>
			<td>{{ $b->pengarang }}</td>
			<td>
				<a href="/books/edit/{{ $b->id }}">Edit</a>
				|
				<a href="/books/delete/{{ $b->id }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>