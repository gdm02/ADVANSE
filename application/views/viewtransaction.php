
<div class="container">
	<table class="responsive-table bordered centered highlight">
        <thead>
          <tr>
              <th data-field="dsp_id">DSP Name</th>
              <th data-field="dealer_no">Dealer No.</th>
              <th data-field="SIM">SIM</th>
              <th data-field="amount">Amount</th>
              <th data-field="confirm_no">Confirmation No.</th>
              <th data-field="date_created">Date Created</th>
              <th data-field="beg_bal">Beginning Balance</th>
              <th data-field="run_bal">Running Balance</th>
          </tr>
        </thead>

        <!-- PHP append na lang based sa results sa DB, tsaka PHP din sa clickable table,  !-->
        <tbody class="dsp">
         <?php foreach ($trans as $trans_item): ?>
         	<tr class="modal-trigger" href="#modal1" data-id="<?php echo $trans_item->transaction_id; ?>" id="<?php echo $trans_item->transaction_id; ?>">
	          	<td class="dsp_name"><?php echo $trans_item->dsp_name; ?></td>
	          	<td class="dealer_no"><?php echo $trans_item->dealer_no; ?></td>
	          	<td class="sim"><?php echo strtoupper($trans_item->global_name); ?></td>
	          	<td class="amount"><?php echo $trans_item->amount; ?></td>
	          	<td class="confirm_no"><?php echo $trans_item->confirm_no; ?></td>
	          	<td class="date_created"><?php echo $trans_item->date_created; ?></td>
	          	<td class="beg_bal"><?php echo $trans_item->beg_bal; ?></td>
	          	<td class="run_bal"><?php echo $trans_item->run_bal; ?></td>

          	</tr>
         <?php endforeach; ?>
        </tbody>
         
      </table>


		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>Edit Transaction</h4>
				<form class="col s12">
					<input type="hidden" value="" id="newid">
				<div class="row">
			        <div class="input-field col s12">
			        	<select id="newname" name="dsp"readonly>
			        		<option value="0"></option>
			        		<?php foreach ($dsp as $dsp_item): ?>
			        			<option value="<?php echo $dsp_item->dsp_id; ?>"><?=$dsp_item->dsp_name?></option>
			        		<?php endforeach; ?>	
			        	</select>
			        </div>
			    </div>
				<div class="row">					
					<select name="dealer_no"  id="newdealer_no" name="dealer_no" readonly>
		        		<option value="0"></option>
		        		<?php foreach ($dsp as $dsp_item): ?>
		        			<option data-id="<?php echo $dsp_item->dsp_id; ?>" value="<?php echo $dsp_item->dealer_no; ?>"><?=$dsp_item->dealer_no?></option>
		        		<?php endforeach; ?>	
		        	</select>
				</div>

				<div class="row">
					<div class="input-field col s8">
						<label class="active">Date of Transaction</label>
						<input id="newdate_created" type="date" value="<?php echo date('Y-m-d'); ?>"></input>
					</div>
				</div>

			    <div class="row">
			        <div class="input-field col s4">
				        <input id="newamount" type="text" class="validate">
				        <label for="amount">Amount</label>
			        </div>
			        <div class="input-field col s4">
			        	<select name="newsim" id="sim">
			        		<?php foreach ($sim as $sim_item): ?>
			        			<option value="<?php echo $sim_item->global_name; ?>"><?=$sim_item->global_name?></option>
			        		<?php endforeach; ?>	
			        	</select>
			          <label>SIM</label>
			        </div>

			    </div>
			    <div class="col m12">
			    <p class="right-align">
			    	<button class="btn btn-large waves-effect waves-light" type="submit" name="action">Edit Transaction</button>
			    </p>
			    </div>
			</form>
			</div>
		</div>
	</div>

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

