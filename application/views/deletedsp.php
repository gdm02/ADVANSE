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
                <li><a href="./editdsp.php">Edit/View DSP</a></li>
                <li class="active"><a href="./deletedsp.php">Delete DSP</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>
<br>
<div class="container">
	<!-- Append na lang din dito, may class na !-->
	<label>DSP Name</label>
	<div class="input-field col s12">
    	<select class="dsp">
    		<option value="1">DSP1</option>
    	</select>
    </div>
</div>


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
    $(document).ready(function() {
      $('select').material_select();
    });
</script>

</body>
</html>
