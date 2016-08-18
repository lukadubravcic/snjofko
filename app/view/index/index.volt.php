<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->tag->getTitle(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->assets->outputCss('style'); ?>
	<?php echo $this->assets->outputJs('js'); ?>
	


</head>
<body>
<div>
<nav class="navbar navbar-default" >

	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo $this->url->get('index'); ?>">Kitnjak</a>
		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Nesto</a></li>
				<li><a href="#about">Nesto</a></li>	
				<li><a href="#contact">Nesto</a></li>
			</ul>

			<div class="col-sm-3 col-md-3">
				<form class="navbar-form" role="search">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search" name="q">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><span>Go</span></button>
						</div>
					</div>
				</form>
			</div>
			<div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo $this->url->get('login/'); ?>">Prijava</a></li>
					<li><a href="<?php echo $this->url->get('login/register'); ?>">Registracija</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>
</div>
	 
<?php echo $this->flash->output(); ?>



<div class="container" >
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<a href="#" <a href="#" class="btn btn-block btn-lg btn-warning"> Auto-Moto</a>			
		</div>
		<div class="col-md-4">
			
			<a href="#" <a href="#" class="btn btn-block btn-lg btn-warning"> Nekretnine</a>
			
		</div>
		<div class="col-md-4">
			<a href="#" class="btn btn-block btn-lg btn-warning">Usluge</a>
			
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
			<a href="#" class="btn btn-block btn-lg btn-warning">Elektronika</a>
			
		</div>
		<div class="col-md-4">
			<a href="#" class="btn btn-block btn-lg btn-warning">Audio-Video</a>
			
		</div>
		<div class="col-md-4">
			
			<a href="#" class="btn btn-block btn-lg btn-warning">
			Sjekire</a>

			
		</div>
	</div>


</div>




</body>
</html>