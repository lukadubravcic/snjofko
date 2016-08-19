<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->tag->getTitle(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->assets->outputCss('style'); ?>
	<?php echo $this->assets->outputJs('js'); ?>
	
  <?php echo $this->assets->outputCss('other'); ?>

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
			<a class="navbar-brand" href="<?php echo $this->url->get('index/'); ?>">Snjofko</a>
		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li><a href="<?php echo $this->url->get('index/about'); ?>">O nama</a></li>				
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


<div class="container">

    <legend>Registracija</legend>
    <br><br>

    <form class="form-signin" method="post" action="<?php echo $this->url->get('login/doRegister'); ?>">

        <input type="name" name="name" class="form-control" placeholder="Korisničko ime" required autofocus>

        <input type="email" name="email" class="form-control" placeholder="Email adresa" required autofocus>

        <input type="password" name="password" class="form-control" placeholder="Lozinka" required>

        <input type="password" name="confirm_password" class="form-control" placeholder="Ponovi lozinku" required>

        <input class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Prijava"></input>

        <input type="hidden" name="<?php echo $this->security->getTokenKey(); ?>" value="<?php echo $this->security->getTokenKey(); ?>" />

    </form>

</div> <!-- /container -->



</body>
</html>