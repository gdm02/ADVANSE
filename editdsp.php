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
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
      <!--<a class="brand-logo">Register</a>-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./login.php">Login</a></li>
        <li><a href="./register.php">Register</a></li>
      </ul>
    </div>
  </nav>
 </div> <ul id="slide-out" class="side-nav fixed">
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header active">Manage DSPs</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="./adddsp.php">Add DSP</a></li>
                <li class="active"><a href="./editdsp.php">Edit DSP</a></li>
                <li><a href="./deletedsp.php">Delete DSP</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>
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
	        <div class="input-field col s6">
	          <input id="password" type="password" class="validate">
	          <label for="password">Password</label>
	        </div>
		    <div class="input-field col s6">
		    	<input id="confirm_password" type="password" class="validate">
	        	<label for="confirm_password">Confirm Password</label>
		    </div>
	    </div>
	    <div class="row">
	    	<button class="btn waves-effect waves-light" type="submit" name="action">Register</button>
	    </div>
	</form>
	test<br>
Edit DSP<br>
</div>


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
