<?php #include ('header.php'); ?>

<div id="donor_form_content" class="fh5co-cta" style="background-image: url(../donor.png);">
		<div class="overlay"></div>
		<div class="container">
			<div class="col-md-12 text-center animate-box">
				<div >
        <p>Thank you for making a step to join us today, Please fill in the fields below.</p>
        <hr>
        <input type="button" id="donor" class="text-right" value="Donor">
        
        
        <hr>
        <form method="post" id="donor_form" action="index.php">
	<!-- Display the error messages here-->
	<?php include('php/errors.php');?>
	<!---->
	
	<div class="form-group">
		<label>Year of Birth</label>
		<input type="number" name="age" class="form-control" placeholder="Please fill in your Y.O.B here" value="<?php echo $age; ?>">
	</div>
	<div class="form-group">
		<label>Weight</label>
		<input type="number" name="weight" class="form-control" placeholder="Please fill in your Weight here" value="<?php echo $weight; ?>">
	</div>
	<div class="form-group">
		<button type="hidden" name="next"  class="btn">Next</button>
		<hr>
	</div>
	
</form>
<form id="recipient_form" style="display: none;">
	<input type="text" name="">
</form>
<script src="js/select.js"></script>
<script src="js/displayform.js"></script>

      </div>
			</div>
		</div>
	</div>
<?php #include ('footer.php'); ?>
<?php #include ('footerquery'); ?>	