<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<h2>Different Divs on one Page</h2>
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
		<li><a data-toggle="tab" href="#menu1">DOMAIN</a></li>
		<li><a data-toggle="tab" href="#menu2">HOSTING</a></li>
		<li><a data-toggle="tab" href="#menu3">WEB DESIGN</a></li>
		<li><a data-toggle="tab" href="#menu4">WEB PROGRAMMING</a></li>
	</ul>
	
	<div class="tab-content">
		<div id="home" class="tab-pane fade in active">
		<h3>HOME</h3>
		<p>Hello Class... This is Home Page...</p>
		</div>
		<div id="menu1" class="tab-pane fade">
		<h3>DOMAIN</h3>
		<p>Hello Class this is Domain Div...</p>
		</div>
		<div id="menu2" class="tab-pane fade">
		<h3>HOSTING</h3>
		<p>Hello Class this is Hosting Div...</p>
		</div>
		<div id="menu3" class="tab-pane fade">
		<h3>WEB DESIGN</h3>
		<p>Hello Class this is Web Design Div...</p>
		</div>
		<div id="menu4" class="tab-pane fade">
		<h3>WEB Programming</h3>
		<p>We do Programming...</p>
		</div>
	</div>
</div>

</body>
</html>
