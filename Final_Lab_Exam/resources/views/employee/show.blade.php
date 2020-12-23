<!DOCTYPE html>
<html>
<head>
	<title>Job Details</title>
</head>
<body>
	<a href="{{route('employee.joblist')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>
	<table border="1">
		<tr>
			<td>Company Name</td>
			<td>{{$companyname}}</td>
		</tr>
		<tr>
			<td>Job Title</td>
			<td>{{$jobtitle}}</td>
		</tr>
		<tr>
			<td>Job Location</td>
			<td>{{$joblocation}}</td>
		</tr>
		<tr>
			<td>Salary</td>
			<td>{{$salary}}</td>
		</tr>
	</table>
</body>
</html>