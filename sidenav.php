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
<ul id="slide-out" class="side-nav fixed">
    <li class="no-padding">
      <ul class="collapsible collapsible-accordion">
        <li>
          <a class="collapsible-header active">Manage DSPs</a>
          <div class="collapsible-body">
            <ul>
              <li<?php if ($page == 'adddsp') echo ' class="active"'; ?>><a href="./adddsp.php";>Add DSP</a></li>
              <li<?php if ($page == 'editdsp') echo ' class="active"'; ?>><a href="./editdsp.php">Edit/View DSP</a></li>
              <li<?php if ($page == 'deletedsp') echo ' class="active"'; ?>><a href="./deletedsp.php">Delete DSP</a></li>
            </ul>
          </div>
        </li>
      </ul>
    </li>
  </ul>
  </nav>
<br>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
