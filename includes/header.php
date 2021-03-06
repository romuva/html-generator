<?php 
	include_once'config/Session.php';
	include_once'config/Database.php';
	include_once'config/Utilities.php'; 
?>
<!DOCTYPE html>
<html>
<head lang="en">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="all,follow">
      <meta name="googlebot" content="index,follow,snippet,archive">
      
      <!-- link the connector stylsheet -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/font-awesome.css">
      <link rel="stylesheet" href="assets/css/sweetalert.css">
      <link rel="stylesheet" href="assets/css/footable.bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/custom.css">

      <script src="assets/js/sweetalert.min.js"></script>

      <script src="https://fooplugins.github.io/FooTable/docs/js/demo-rows.js"></script>
           
      
      <!-- link google font -->
      <link href="https://fonts.googleapis.com/css?family=Yrsa" rel="stylesheet">
      
      <title><?php if(isset($page_title)) echo $page_title; if(!empty($_SERVER['HTTP_HOST'])) echo " | ".$_SERVER['HTTP_HOST']; ?></title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><?php if(!empty($_SERVER['HTTP_HOST'])) echo $_SERVER['HTTP_HOST']; ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-left"><i class="hide"><?php echo guard(); ?></i>
					<li>
						<a href="index.php">
							Home
						</a>
					</li>
		    		<li>
		    			<a href="about.php">
		    				About
		    			</a>
		    		</li>
		    		<li>
		    			<a href="contact.php">
		    				Contact 
		    			</a>
		    		</li>
				</ul>
				<ul class="nav navbar-nav navbar-right"><i class="hide"><?php echo guard(); ?></i>
					<?php 
			            if(isset($_SESSION['username']) || isCookieValid($db)):
			        ?>
			    		<li>
			    			<a href="profile.php">
			    				My Profile
			    			</a>
			    		</li>
			    		<li>
			    			<a href="logout.php">
			    				Logout
			    			</a>
			    		</li>
			    	<?php else: ?>
			    		<li>
			    			<a href="login.php">
			    				Login
			    			</a>
			    		</li>
			    		<li>
			    			<?php if(REGISTRATION_ACTIVE): ?>
			    			<a href="register.php">
			    				Register
			    			</a>
			    			<?php endif; ?>
			    		</li>
			    	<?php endif; ?>
				</ul>
			</div>
		</div>
	</nav>
