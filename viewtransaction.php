<?php
	$page = 'viewtransaction';
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
			padding-left: 10px;
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
	<table class="responsive-table centered highlight">
        <thead>
          <tr>
              <th data-field="transaction_id">Dealer No.</th>
              <th data-field="dsp_id">Name</th>
              <th data-field="network">Network</th>
              <th data-field="amount">Amount</th>
              <th data-field="confirm_no">Confirmation No.</th>
              <th data-field="date_created">Date Created</th>
              <th data-field="dealer_no">Dealer No.</th>
              <th data-field="beg_bal">Beginning Balance</th>
              <th data-field="run_bal">Running Balance</th>
              <th data-field="user_id">User ID</th>
          </tr>
        </thead>

        <!-- PHP append na lang based sa results sa DB, tsaka PHP din sa clickable table,  !-->
        <tbody class="dsp">
          <tr>
          	<td>1</td>
          	<td>2</td>
          	<td>3</td>
          	<td>4</td>
          	<td>5</td>
          	<td>6</td>
          	<td>7</td>
          	<td>8</td>
          	<td>9</td>
          	<td>0</td>
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
  });
</script>
</body>
</html>
