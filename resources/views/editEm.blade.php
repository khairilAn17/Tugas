<!DOCTYPE html>
<html>
<head>
	<title>Update Location</title>
</head>
<body>

<div align="center">
	<h3>Update Employee</h3>
 
	<a href="/employe"> Back</a>
	
	<br/>
	<br/>
 
	@foreach($employe as $em)
	<form action="/employe/update" method="post">
		{{ csrf_field() }}

        <table>
            <tr>
                <td>Name</td>
                <td> <input type="text" required="required" name="name" value="{{ $em->name }}"> <br/></td>
            </tr>
            <tr>
                <td>Location Code</td>
                <td> <input type="text" required="required" name="location" value="{{ $em->name }}"><br/></td>
            </tr>
            <tr>
                <td>Birth Date</td>
                <td> <input type="text" required="required" name="date" value="{{ $em->birth_date }}"><br/></td>
            </tr>
        </table>
		<input type="hidden" name="id" value="{{ $em->id }}"> <br/>
		  <br/>
		<input type="submit" value="Update Data">
	</form>
	@endforeach
</div>
 
</body>
</html>