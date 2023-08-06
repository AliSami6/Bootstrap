<!DOCTYPE html>
<html lang="en">
<head>
	<title>Menu and Navigation</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style.css">
		<!-- <style>
		.nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
			background-color: lightgreen;
		}
		</style> -->
		<style>
		.navbar-inverse {
			background-color: #442e92;
		}
		.navbar-inverse .navbar-brand {
			color: #feff37;
		}
		</style>
</head>
<body>

<!-- 
navbar = Creates Bar of a Standard Menu
navbar-inverse = Reverse Color of the entire Bar

navbar-brand = Put your Logo/Brand Name inside this Area

nav = Navigator's Base Class
navbar-nav = Standard Menu Bar's Base Design

action = Active Menu of the Menu Bar
dropdown = The Menu from where Sub-Menu is being Appeared
dropdown-menu = The Dropped Menu that appears on your Click
-->

<!-- ----- --> <hr> <!-- ----- -->

<nav class="navbar navbar-inverse"> 

		<div class="navbar-header">
			<a class="navbar-brand" href="#">Nirjhor.Net</a>
		</div>

		<div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Page 1-1</a></li>
						<li><a href="#">Page 1-2</a></li>
						<li><a href="#">Page 1-3</a></li>
					</ul>
				</li>
				<li><a href="#">Page 2</a></li>
				<li><a href="#">Page 3</a></li>
			</ul>
		</div>

</nav>  

<!-- ----- --> <hr> <!-- ----- -->

<div class="col-md-offset-9 col-md-3">

	<ul class="nav nav-stacked nav-pills">
		<li class="active"><a href="#">Main Menu</a></li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="#">Submenu 1-1</a></li>
				<li><a href="#">Submenu 1-2</a></li>
				<li><a href="#">Submenu 1-3</a></li>                        
			</ul>
		</li>
		<li><a href="#">Menu 2</a></li>
		<li><a href="#">Menu 3</a></li>
	</ul>
	
</div>

</body>
</html>
