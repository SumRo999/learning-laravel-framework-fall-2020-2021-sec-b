<!DOCTYPE html>
<html>
<head>
	<title>Job List</title>
</head>
<body>
	<a href="{{route('employee.home')}}">Back</a> |
	<a href="/logout">logout</a>
	<br>

	<table border="1">
		<tr>
			<td>Id</td>
			<td>Company Name</td>
			<td>Job Title</td>
			<td>Job Location</td>
			<td>Salary</td>
			<td>Action</td>
		</tr>

		@for($i=0; $i < count($job); $i++)
			<tr>
				<td>{{$job[$i]['id']}}</td>
				<td>{{$job[$i]['companyname']}}</td>
				<td>{{$job[$i]['jobtitle']}}</td>
				<td>{{$job[$i]['joblocation']}}</td>
				<td>{{$job[$i]['salary']}}</td>
				<td>
					<a href="{{route('employee.editjob', $job[$i]['id'])}}">Edit </a> |
					<a href="{{route('employee.jobdetails', $job[$i]['id'])}}">Details </a> |
					<a href="{{route('employee.deletejob', $job[$i]['id'])}}">Delete </a> 
				</td>
			</tr>
		@endfor

	</table>
</body>
</html>