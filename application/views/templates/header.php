
<!DOCTYPE HTML>
<html>
<head>
     <!--Import Google Icon Font-->
      <!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.min.css"  media="screen,projection"/>
      <script type="text/javascript" src="<?php echo base_url();?>js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
</head>

<body>  
<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper">
      <!--<a class="brand-logo">Register</a>-->
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./login">Login</a></li>
        <li><a href="./register">Register</a></li>
      </ul>
    </div>
  </nav>
 </div> 
  <ul id="slide-out" class="side-nav fixed">
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Manage DSPs</a>
            <div class="collapsible-body">
              <ul>
                <li><a href="./manageDsp/addDsp">Add DSP</a></li>
                <li><a href="./manageDsp/editDsp">Edit/View DSP</a></li>
                <li><a href="./deletedsp.php">Delete DSP</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>