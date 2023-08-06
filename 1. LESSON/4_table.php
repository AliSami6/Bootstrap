<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Table</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="nirjhor.css" />
	
</head>
<style>
.nirjhor {
	text-align: center;
}
.nirjhor > thead > tr, .nirjhor th {
	background-color: lightblue;
	text-align: center;
}
.nirjhor th { color: #0C536B; }
</style>

<body>

<!-- 
table is the default class that makes the structure of your Table in BootStrap
table-hover and table-striped are some additional class for Table that gives additional effect to your Table

table-hover 	:: 	When you hover over a Row, it becomes light gray
table-striped 	:: 	All the even rows become of light gray
-->


<div class="container">
	<h2>Striped Rows</h2>
	<p>The .table-striped class adds zebra-stripes to a table:</p>            
	<table class="table table-striped"> <!-- table-hover | table-striped -->
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Nirjhor</td>
				<td>Anjum</td>
				<td>nirjhor@mail.org</td>
			</tr>
			<tr>
				<td>Abdullah</td>
				<td>Ishak</td>
				<td>dr.ishak@mail.com</td>
		  </tr>
		  <tr>
				<td>Bill</td>
				<td>Gates</td>
				<td>bill@microsoft.com</td>
			</tr>
		</tbody>
	</table>
</div>

</body>
</html>
