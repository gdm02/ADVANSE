<!DOCTYPE HTML>
<html>
<head>
	 <!--Import Google Icon Font-->
      <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body>  
<nav>
    <div class="nav-wrapper">
      <!--<a class="brand-logo">Register</a>-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="./login.php">Login</a></li>
        <li><a href="./register.php">Register</a></li>
      </ul>
      <ul class="side-nav" id="side-menu">
      <li class="active"><a href="./login.php">Login</a></li>
        <li><a href="./register.php">Register</a></li>
    </ul>
    </div>
  </nav>
<br>
<div class="container">
	<form class="col s12">
		<div class="row">
	        <div class="input-field col s12">
	          <input id="user_name" type="text" class="validate">
	          <label for="user_name">User Name</label>
	        </div>
	    </div>
	    <div class="row">
	        <div class="input-field col s12">
	          <input id="password" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
	    </div>
	    <div class="col m12">
	    <p class="right-align">
	    	<button class="btn btn-large waves-effect waves-light" type="button" name="action">Login</button>
	    </p>
	    </div>
	</form>
</div>

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
