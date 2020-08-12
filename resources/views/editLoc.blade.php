<!DOCTYPE html>
<html>
<head>
	<title>Update Location</title>
</head>
<body>

<div align="center">
	<h3>Update Location</h3>
 
	<a href="/location"> Back</a>
	
	<br/>
	<br/>
 
	@foreach($location as $l)
	<form action="/location/update" method="post">
		{{ csrf_field() }}

        <table>
            <tr>
                <td>Code</td>
                <td> <input type="text" required="required" name="code" value="{{ $l->code }}"> <br/></td>
            </tr>
            <tr>
                <td>Location</td>
                <td> <input type="text" required="required" name="name" value="{{ $l->name }}"><br/></td>
            </tr>
        </table>
		<input type="hidden" name="id" value="{{ $l->id }}"> <br/>
		  <br/>
		<input type="submit" value="Update Data">
	</form>
	@endforeach
</div>
 
</body>
</html>