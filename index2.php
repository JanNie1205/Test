<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Title </title>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/icons.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	
</head>
<body>
 <nav class="navbar navbar-default" role="navigation">
 <div class="content clearfix">
	<div class="block block-40 clearfix">
		<p><a href="#" id="trigger" class="menu-trigger">Open/Close Menu</a></p>
		</div>
		</div>
 	<!-- Brand and toggle get grouped for better mobile display -->
 	<div class="container">
 	<div class="navbar-header">
 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
 			<span class="sr-only">Toggle navigation</span>
 			<span class="icon-bar"></span>
 			<span class="icon-bar"></span>
 			<span class="icon-bar"></span>
 		</button>
 		<a class="navbar-brand" href="#">Title</a>
 	</div>
 
 	<!-- Collect the nav links, forms, and other content for toggling -->
 	<div class="collapse navbar-collapse navbar-ex1-collapse">
 		<ul class="nav navbar-nav">
 			<li class="active"><a href="#">Dashboard</a></li>
 			<li><a href="#">Data Browser</a></li>
 			<li><a href="#">Prozessdatenvisualisierung</a></li>
 		</ul>
 		<form class="navbar-form navbar-left" role="search">
 			<div class="form-group">
 				<input type="text" class="form-control" placeholder="Search">
 			</div>
 			<button type="submit" class="btn btn-default">Submit</button>
 		</form>
 	<!-- <ul class="nav navbar-nav navbar-right">
 			<li><a href="#">Link</a></li>
 			<li class="dropdown">
 				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
 				<ul class="dropdown-menu">
 					<li><a href="#">Action</a></li>
 					<li><a href="#">Another action</a></li>
 					<li><a href="#">Something else here</a></li>
 					<li><a href="#">Separated link</a></li>
 				</ul>
 			</li>
 		</ul> -->
 	</div><!-- /.navbar-collapse -->
 	</div>
 </nav>
 <!-- mp-menu -->
<nav id="mp-menu" class="mp-menu">
	<div class="mp-level">
		<h2 class="icon icon-world">All Categories</h2>
		<ul>
			<li class="icon icon-arrow-left">
				<a class="icon icon-display" href="#">Devices</a>
				
				<div class="mp-level">
					<h2 class="icon icon-display">Devices</h2>
					<ul>
						<li class="icon icon-arrow-left">
							<a class="icon icon-phone" href="#">Mobile Phones</a>

							<div class="mp-level">
								<h2>Mobile Phones</h2>
								<ul>
									<li><a href="#">Super Smart Phone</a></li>
									<li><a href="#">Thin Magic Mobile</a></li>
									<li><a href="#">Performance Crusher</a></li>
									<li><a href="#">Futuristic Experience</a></li>
								</ul>
							</div>

						</li>
						<li class="icon icon-arrow-left">
							<!-- ... -->
						</li>
						<li class="icon icon-arrow-left">
							<!-- ... -->
						</li>
					</ul>
				</div>
			</li>
			<li><!-- ... --></li>
			<!-- ... -->
		</ul>
	</div>
</nav>
<!-- /mp-menu -->
	
		<script src="js/classie.js"></script>
		<script src="js/mlpushmenu.js"></script>
		<script>
			new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );
		</script>
</body>
</html>