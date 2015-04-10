<!-- Header -->
<?php $this->view('include/header');?>

<div class="container">
<br>
<br>
<br>
	
<div class="row ">
	<div class="col-md-9 ">
		<div class="row ">
  			<div class="col-md-6 col-md-offset-5 bg-default">
  				<div class="form-group">
					<div class="col-md-offset-4 col-sm-8">
  						<h2>Log in</h2>
  					</div>
  				</div>
  				<br>
  				<br>
  				<?php
  				$attributes = array('class' => 'form-horizontal', );

				 echo form_open('index/login', $attributes); 	?>
				<div class="form-group">
					<div class="col-md-offset-2 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-user" id="basic-addon1"></span>
  							<input type="text" class="form-control glyphicon glyphicon-user col-xs-3" name="username" placeholder="E-mail" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-2 col-sm-8">
  						<div class="input-group">
  							<span class="input-group-addon glyphicon glyphicon-pencil" id="basic-addon1"></span>
  							<input type="password" class="form-control glyphicon glyphicon-pencil col-xs-3" name="password" placeholder="Password" aria-describedby="basic-addon1">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="col-md-offset-2 col-sm-8">		
  						<button type="submit" class="btn btn-info btn-lg btn-block">log in</button>
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