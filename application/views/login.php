<!-- Header -->
<?php $this->view('include/header');?>

<div class="container">
<br>
<br>
<br>
<div class="row ">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-6 col-md-offset-5 bg-success">
				<div class="col-md-12  col-md-offset-1">
					<h1>ViA Card (Thailand)</h1>
				</div>
			</div>
		</div>
	</div>
</div>		

<div class="row ">
	<div class="col-md-9 ">
		<div class="row ">
  			<div class="col-md-6 col-md-offset-5 bg-success">
  				<?php
  				$attributes = array('class' => 'form-horizontal', );

				 echo form_open('index/login', $attributes); 	?>
  				<div class="form-group">
  					<div class="col-sm-12">
  						<input type="text" class="form-control" name="username" placeholder="Enter email">
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-sm-12">
  						<input type="password" class="form-control" name="password" placeholder="Enter password">
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-sm-12">		
  						<button type="submit" class="btn btn-info btn-lg btn-block">login</button>
  					</div>
  				</div>
  			</div>
  			<div class="col-md-9 col-md-offset-3">
  				<hr/>
  			</div>
  			<div class="col-md-9 col-md-offset-5">
  				
  				<label>EX.</label>
  				<label>username -> user@example.com</label>
  				<label>||</label>
  				<label>password -> 1234</label>
			</div>
		</div>		<?php echo form_close()?>
	</div>
</div>
<div class="row">
	<div class="col-md-9">
		<div class="row">
			<div class="col-md-9 col-md-offset-5">
				<?php //$this->view($content); ?>
			</div>
		</div>
	</div>
</div>

</div>
<!-- footer -->
</body>
</html>
<?php //$this->view('include/footer');?>