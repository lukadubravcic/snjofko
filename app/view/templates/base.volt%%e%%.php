a:5:{i:0;s:272:"<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->tag->getTitle(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->assets->outputCss('style'); ?>
	<?php echo $this->assets->outputJs('js'); ?>
	";s:4:"head";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:2:"
	";s:4:"file";s:31:"../app/view/templates/base.volt";s:4:"line";i:10;}}i:1;s:1310:"
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

";s:7:"content";a:1:{i:0;a:4:{s:4:"type";i:357;s:5:"value";s:1:"
";s:4:"file";s:31:"../app/view/templates/base.volt";s:4:"line";i:57;}}i:2;s:18:"


</body>
</html>";}