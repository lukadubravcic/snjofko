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
				<li><a href="<?php echo $this->url->get('userpanel/getusersads'); ?>">Korisnici</a></li>
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


	

	<div class="container">

		<?php foreach ($ads as $ad) { ?>
		<?php if ($ad->deleted != 1) { ?>

			<form class="form-horizontal" method="post" action="<?php echo $this->url->get('userpanel/deleteAd'); ?>" style="background-color:#d9d9d9">
				<fieldset>
					<legend><?php echo $ad->title; ?></legend>	

					<div class="col-md-6">
						<input type="hidden" name="ad_title" value="<?php echo $ad->title; ?>"/>
						Kategorija: <?php echo $ad->category; ?> <br> <input type="hidden" name="ad_category" value="<?php echo $ad->category; ?>"/>
						Lokacija: <?php echo $ad->location; ?> <br> <input type="hidden" name="ad_id" value="<?php echo $ad->id; ?>"/>
						Opis oglasa: <?php echo $ad->description; ?> <br> <input type="hidden" name="ad_location" value="<?php echo $ad->location; ?>"/>
						Cijena: <?php echo $ad->price; ?> HRK <br><br> <input type="hidden" name="ad_price" value="<?php echo $ad->price; ?>"/>
						<input type="hidden" name="ad_id" value="<?php echo $ad->id; ?>"/>
						<?php if ($this->session->get('role') != 'guest') { ?>

							<?php if ($this->session->get('id') == $ad->user_id || $this->session->get('role') == 'admin') { ?>
								<!-- <div class="col-md-3">
									<input name="submit" id="change" class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Izmjena"></input>
								</div> -->
								<div class="col-md-4">
									<input name="submit" id="delete" class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Brisanje"></input>
								</div>
								<br>
							<?php } ?>
							
						<?php } ?>
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
		<?php } ?>

	</div>





</body>
</html>