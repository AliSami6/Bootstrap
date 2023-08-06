<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Buttons</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- COMMON BADGE -->
	<p>Envelop with Link:
		<a href="#"><span class="glyphicon glyphicon-envelope"></span></a>
	</p>
	
	<p>Simple Search Icon: <span class="glyphicon glyphicon-search"></span></p>
	
	<p>Search Button:
		<button type="button" class="btn btn-default">
			<span class="glyphicon glyphicon-search"></span> Search
		</button>
	</p>
	
	<p>Search Button with Style:
		<button type="button" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Search
		</button>
	</p>
	
	<p>Print Icon: 
		<span class="glyphicon glyphicon-print"></span>
	</p>
	
	<p>Print Icon with Link:
		<a href="#" class="btn btn-success btn-lg">
			<span class="glyphicon glyphicon-print"></span> Print 
		</a>
	</p> 
<!-- COMMON BADGE -->

<!-- BADGE WITH NUMBER -->
<div>
	<a href="#">Friend Request <span class="badge">5</span></a><br>
	<a href="#">Comments <span class="badge">10</span></a><br>
	<a href="#">Notification <span class="badge">2</span></a>
</div>
<!-- BADGE WITH NUMBER -->

<!-- ADVANCED BUTTON BADGE WITH NUMBER -->
<div>
	<button type="button" class="btn btn-primary">Friend Request <span class="badge">7</span></button>
	<button type="button" class="btn btn-success">Comments <span class="badge">3</span></button>    
	<button type="button" class="btn btn-danger">Notification <span class="badge">5</span></button>    
</div>
<!-- ADVANCED BUTTON BADGE WITH NUMBER -->
	
</body>
</html>
