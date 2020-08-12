<html>
<head>
	<title>Add Location</title>
</head>
<body>

<div align="center">
	<h3>Add Location</h3>
 
	<a href="/location"> Back</a>
	
	<br/>
	<br/>
 
	<form action="/location/store" method="post">
		{{ csrf_field() }}
        <table>
            <tr>
                <td>Code</td>
                <td> <input type="text" name="code" required="required"> <br/></td>
            </tr>
            <tr>
                <td>Location</td>
                <td> <input type="text" name="name" required="required"> <br/></td>
            </tr>
        </table>
		
		 
		<input type="submit" value="Save">
	</form>
 </div>
</body>
</html>