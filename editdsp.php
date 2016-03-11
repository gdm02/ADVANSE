<?php
	$page = 'editdsp';
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
	include 'navbar.php';
	include 'sidenav.php';
?>
<div class="container">
	<table class="responsive-table bordered centered highlight">
        <thead>
          <tr>
              <th data-field="dealer_no">Dealer No.</th>
              <th data-field="name">Name</th>
              <th data-field="percentage">Percentage</th>
              <th data-field="network">Network</th>
              <th data-field="balance">Balance</th>
          </tr>
        </thead>

        <!-- PHP append na lang based sa results sa DB, tsaka PHP din sa clickable table,  !-->
        <tbody class="dsp">
          <tr class="modal-trigger" href="#modal1">
          	<div id="modal1" class="modal">
          		<div class="modal-content">
	          		<h4>Edit DSP details</h4>
	          		<form class="col s12">
	          			<div class="row">
							<div class="input-field col s4">
								<input id="dealer_no" type="text" class="validate">
								<label for="dealer_no">Dealer No.</label>
							</div>
						</div>
						<div class="row">
					        <div class="input-field col s12">
					        	<input id="full_name" type="text" class="validate">
					        	<label for="full_name">Full Name</label>
					        </div>
					    </div>
					    <div class="row">
					    	<div class="input-field col s12">
					    		<select class="dsp">
					    			<option value="1">DSS1</option>
					    		</select>
					    		
					    	<label>Assigned DSS</label>
					    	</div>
					    </div>
					    <div class="row">
					        <div class="input-field col s4">
						        <input id="percentage" type="number" min="0" max="100" class="validate">
						        <label for="percentage">Percentage</label>
					        </div>
					        <div class="input-field col s4">
					        	<select>
					        		<option value="1">SUN</option>
					        		<option value="2">SMART</option>
					        	</select>
					          <label>Network</label>
					        </div>
					        <div class="input-field col s4">
					          <input id="balance" type="text" class="validate">
					          <label for="balance">Balance</label>
					        </div>
					    </div>
					    <div class="col m12">
					    <p class="right-align">
					    	<button class="btn btn-large waves-effect waves-light" type="button" name="action">Edit Details</button>
					    </p>
					    </div>
	          		</form>
	          	</div>
          	</div>
          	<td>Test1</td>
          	<td>Test2</td>
          	<td>Test3</td>
          	<td>Test4</td>
          	<td>Test5</td>
          </tr>
        </tbody>
         
      </table>

</div>


<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    //$('.modal-trigger').openModal();
    //$('#modal1').openModal();
    $('select').material_select();
    $(document).on('click', '.modal-trigger', function(e) {
	    e.preventDefault();
	    //you have to trigger modal like this
	    //$(".modal-trigger").leanModal();
	    $('#modal1').openModal();
	  });
  });
</script>
</body>
</html>
