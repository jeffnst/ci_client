<!-- Header -->
<?php $this->view('include/header');?>

<div class="container">
<br>
<br>
<br>
<div class="row">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-9 col-md-offset-5">
				<h1></h1>
			</div>
		</div>
	</div>
</div>		
<br><br>
<div class="row">
	<div class="col-md-9">
		<div class="row">
  			<div class="col-md-9 col-md-offset-5 ">
  				<?php echo $content ; ?>
  			</div>	
		</div>		
	</div>
</div>
</div>
<!-- footer -->
<?php $this->view('include/footer');?>