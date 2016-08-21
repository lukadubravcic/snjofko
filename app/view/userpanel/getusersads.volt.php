<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->tag->getTitle(); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo $this->assets->outputCss('style'); ?>
	<link rel="stylesheet" type="text/css" href="css/customnavbar.css">
	<?php echo $this->assets->outputJs('js'); ?>
	
<style type="text/css">
	.aParent div {
  float: left;
  clear: none; 
}
</style>


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
			<a class="navbar-brand" href="<?php echo $this->url->get('index'); ?>">Snjofko</a>
		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li><a href="#">Korisnički profil</a></li>
				<li><a href="<?php echo $this->url->get('userpanel/getusersads'); ?>">Vlastiti oglasi</a></li>
				<li><a href="<?php echo $this->url->get('userpanel/createad'); ?>">Objavi oglas</a></li>
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



	<div class="container">

		<?php foreach ($ads as $ad) { ?>

			<form class="form-horizontal" style="background-color:#d9d9d9">
				<fieldset>
					<legend><?php echo $ad->title; ?></legend>	

					<div class="col-md-6">
						Kategorija: <?php echo $ad->category; ?> <br>
						Lokacija: <?php echo $ad->location; ?> <br>
						Opis oglasa: <?php echo $ad->description; ?> <br>
						Cijena: <?php echo $ad->price; ?> HRK
						<br><br>
					</div>

					<div class="col-md-6">
						<?php if ($ad->picture != null) { ?>
						<img src="<?php echo $ad->picture; ?>" style="border:3px solid black;" height="200" alt="Slika">
						<?php } ?>
						<br><br>
					</div>
				</fieldset>
			</form>
			<br>

		<?php } ?>

	</div>




</body>
</html>