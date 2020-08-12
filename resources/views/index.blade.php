<html>
<head>
	<title>Technical Test</title>
</head>
<body>
 
<div align="center">
	<h3>Location</h3>
    <a href="/"> Home</a><br>
	<a href="/location/tambah"> + Add Location</a>
	
	<br/>
	<br/>
	<table border="1" style="border-collapse: collapse;" width="70%" align="center">
		<tr >
			<th>Code</th>
			<th>Name</th>
			<th>Opsi</th>
		</tr>
		@foreach($location as $l)
		<tr>
			<td>{{ $l->code }}</td>
			<td>{{ $l->name }}</td>
			<td>
				<a href="/location/edit/{{ $l->id }}">Edit</a>
				|
				<a href="/location/hapus/{{ $l->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 </div>
 
</body>
</html>