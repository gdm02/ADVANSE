<?php
	$page = 'index';
?>
<!DOCTYPE HTML>
<html>
<head>
	 <!--Import Google Icon Font-->
      <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <style>
      .side-nav.fixed {
		  left: 0;
		  top: 64px;
		  position: fixed;
		}
		.container {
	      padding-left: 240px;
	    }

	    @media only screen and (max-width : 992px) {
	      header, main, footer {
	        padding-left: 0;
	      }
	    }
      </style>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body>
<?php 
	include_once 'navbar.php'; 
	include_once 'sidenav.php'; 
?>


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
