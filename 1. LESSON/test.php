<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.carousel-inner {
	width: 100%;
	display: inline-block;
	position: relative;
}
.carousel-inner {
	padding-top: 43.25%;
	display: block;
	content: "";
}
.carousel-item {
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	left: 0;
	background: skyblue;
	background: no-repeat center center scroll;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}

.caption {
	position: absolute;
	top: 50%;
	left: 50%;
    transform: translateX(-50%) translateY(-50%);
	width: 60%;
	z-index: 9;
	margin-top: 20px;
	text-align: center;
}
.caption h1 {
  color: #fff;
	font-size: 52px;
	font-weight: 700;
	margin-bottom: 23px;
}
.caption h2 {
  color: rgba(255,255,255,.75);
	font-size: 26px;
	font-weight: 300;
}
a.big-button {
	color: #fff;
	font-size: 19px;
	font-weight: 700;
	text-transform: uppercase;
	background: #eb7a00;
	background: rgba(255, 0, 0, 0.75);
	padding: 28px 35px;
	border-radius: 3px;
	margin-top: 80px;
	margin-bottom: 0;
	display: inline-block;
}
a.big-button:hover {
	text-decoration: none;
	background: rgba(255, 0, 0, 0.9);
}
a.view-demo {
	color: #fff;
	font-size: 21px;
	font-weight: 700;
	display: inline-block;
	margin-top: 35px;
}
a.view-demo:hover {
	text-decoration: none;
	color: #333;
}

.carousel-indicators .active {
  background: #fff;
}
.carousel-indicators li {
  background: rgba(255, 255, 255, 0.4);
  border-top: 20px solid;
  z-index: 15;
}
  </style>
</head>
<body>
<header>
	
      <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background: #25c;">
            <div class="caption">
              <h1>Create and share your whatever</h1>
              <h2>Make it easy for you to do whatever this thing does.</h2>
            </div>
          </div>

          <div class="carousel-item" style="background: #52c;">
            <div class="caption">
              <h1>Something and share your whatever</h1>
              <h2>Else it easy for you to do whatever this thing does.</h2>

              <a class="big-button" href="" title="">Create Project</a>
              <div class="clear"></div>
              <a class="view-demo" href="" title="">View Demo</a>
            </div>
          </div>
          
          <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1476553986076-d59060d397e4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1989&q=80'); background-size: cover;">
            <div class="caption">
              <h1>Create and share your whatever</h1>
              <h2>Make it easy for you to do whatever this thing does.</h2>
            </div>
          </div>

        </div>
        
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </header>
</body>
</html>