<html>
<head>
	<title>Technical Test</title>
</head>
<body>
 
<div align="center">
	<h3>Employee</h3>
    <a href="/"> Home</a><br>
	<a href="/employe/tambah"> + Add Employee</a><br>
	<a href="/employe/search"> Search</a>
	<br/>
	<br/>
	<table border="1" style="border-collapse: collapse;" width="70%" align="center">
		<tr >
			<th>Name</th>
			<th>Location</th>
			<th>Birth Date</th>
			<th>Opsi</th>
		</tr>
		@foreach($employee as $em)
		<tr>
			<td>{{ $em->name }}</td>
			<td>{{ $em->location_code }}</td>
			<td>{{ $em->birth_date }}</td>
			<td>
				<a href="/employe/edit/{{ $em->id }}">Edit</a>
				|
				<a href="/employe/hapus/{{ $em->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 </div>
 
</body>
</html>