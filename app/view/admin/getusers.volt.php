<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->tag->getTitle(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->assets->outputCss('style'); ?>
	<link rel="stylesheet" type="text/css" href="css/customnavbar.css">
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
			<a class="navbar-brand" href="<?php echo $this->url->get('admin/'); ?>">Snjofko</a>
		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li><a href="<?php echo $this->url->get('admin/getusers'); ?>">Korisnici</a></li>
				<li><a href="<?php echo $this->url->get('adlist/showall'); ?>">Oglasi</a></li>
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
					<li><a href="<?php echo $this->url->get('userpanel/signout'); ?>">Odjava</a></li>					
				</ul>
			</div>
		</div>
	</div>
</nav>
</div>
	 
<?php echo $this->flash->output(); ?>



	<div class="container" >
		<legend>Korisnici</legend>
		<?php foreach ($users as $user) { ?>
		<?php echo $user->name; ?>
		<?php echo $user->email; ?>
		<?php echo $user->role; ?>
		<?php echo $user->created_at; ?>
		<hr>
		<?php } ?>

	</div>




</body>
</html>