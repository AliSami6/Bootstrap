<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Input</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	
	<form class="form-horizontal" role="form">

	<hr>
	
	<!-- TEXT AREA -->
	<div class="form-group">
		<label for="anjum">Comment:</label>
		<textarea class="form-control" rows="5" id="anjum"></textarea>
	</div>
	<!-- TEXT AREA -->
	
	<hr>
	
	<!-- CHECKBOX -->
	<div class="checkbox">
		<label> <input type="checkbox" value="" />Option 1 </label>
	</div>
	<div class="checkbox disabled">
		<label> <input type="checkbox" value="" disabled>Option 3 </label>
	</div>
	
	<label class="checkbox-inline">
		<input type="checkbox" value="">Option 1
	</label>
	<label class="checkbox-inline">
		<input type="checkbox" value="" disabled>Option 2
	</label>
	<!-- CHECKBOX -->
	
	<hr>
	
	<!-- RADIO BUTTON -->
	<div class="radio">
		<label> 
			<input type="radio" name="optradio">Option 1 
		</label>
	</div>
	<div class="radio disabled">
		<label> 
			<input type="radio" name="optradio" disabled>Option 3 
		</label>
	</div>
	
	<label class="radio-inline">
		<input type="radio" name="optradio">Option 1
	</label>
	<label class="radio-inline">
		<input type="radio" name="optradio">Option 2
	</label>
	<!-- RADIO BUTTON -->
	
	<hr>
	
	<!-- DROPDOWN -->
	<div class="form-group">
		<label for="sel1">Select List (Select One):</label>
		<select class="form-control" id="sel1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
	</div>
	<!-- DROPDOWN -->
	
	<hr>
	
	<!-- DROPDOWN -->
	<div>
		<label for="sel2">Mutiple Select List (Hold Shift to Select Multiple Option):</label>
		<select multiple class="form-control" id="sel2" size="5">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
		</select>
	</div>
	<!-- DROPDOWN -->

	</form>
	
</div>
	
</body>
</html>
