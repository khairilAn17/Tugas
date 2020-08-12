<html>
<head>
	<title>Add Employee</title>
</head>
<body>

<div align="center">
	<h3>Add Employee</h3>
 
	<a href="/employe"> Back</a>
	
	<br/>
	<br/>
 
	<form action="/employe/store" method="post">
		{{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td> <input type="text" name="name" required="required"> <br/></td>
            </tr>
            <tr>
                <td>Location Code</td>
                <td> <input type="text" name="location" required="required"> <br/></td>
            </tr>
            <tr>
                <td>Birth Date</td>
                <td> <input type="text" name="date" required="required" placeholder="ex: 2020-08-12"> <br/></td>
            </tr>
        </table>
		
		 
		<input type="submit" value="Save">
	</form>
 </div>
</body>
</html>