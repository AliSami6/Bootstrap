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

<!-- 
LIST OF PROGRESS BAR CLASSES

progress-bar 
progress-bar-success progress-bar-warning progress-bar-danger progress-bar-info
progress-bar-striped 
active
-->

<hr>

<!-- SIMPLE PROGRESS BAR -->
<div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
</div>
<!-- SIMPLE PROGRESS BAR -->

<hr>

<!-- ADVANCED PROGRESS BAR -->
  <div class="progress">
    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
  </div>
  
  <div class="progress">
    <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50% Complete (info)
    </div>
  </div>
  
  <div class="progress">
    <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60% Complete (warning)
    </div>
  </div>
  
  <div class="progress">
    <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70% Complete (danger)
    </div>
  </div>
<!-- ADVANCED PROGRESS BAR -->

<hr>

<!-- MORE PROGRESS BAR -->
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
    Free Space
  </div>
  <div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%">
    Warning
  </div>
  <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
    Danger
  </div>
</div>
<!-- MORE PROGRESS BAR -->
	
</body>
</html>
