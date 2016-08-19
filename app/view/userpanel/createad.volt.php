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
			<a class="navbar-brand" href="<?php echo $this->url->get('index'); ?>">Snjofko</a>
		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li><a href="#">Korisnički profil</a></li>
				<li><a href="#about">Vlastiti oglasi</a></li>
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
    <form class="form-horizontal" method="post" action="<?php echo $this->url->get('userpanel/'); ?>">
        <fieldset>

          <!-- Form Name -->
          <legend>Objava oglasa</legend>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Naziv oglasa</label>  
                  <div class="col-md-4">
                      <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                  </div>
          </div> 

          <!-- Select Basic -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="selectbasic">Kategorija</label>
              <div class="col-md-4">
                  <select id="selectbasic" name="selectbasic" class="form-control">
                      <?php foreach ($categories as $key => $category) { ?>
                          <option value="<?php echo $key; ?>"><?php echo $category; ?></option>                      
                      <?php } ?>
                  </select>
              </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="selectbasic">Županija</label>
              <div class="col-md-4">
                  <select id="selectbasic" name="selectbasic" class="form-control">
                      <?php foreach ($areas as $key => $area) { ?>
                          <option value="<?php echo $key; ?>"><?php echo $area; ?></option>                      
                      <?php } ?>
                  </select>
              </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textarea">Tekst oglasa</label>
              <div class="col-md-4">                     
                  <textarea class="form-control" id="textarea" name="textarea"></textarea>
              </div>
          </div>

          <!-- File Button --> 
          <div class="form-group">
              <label class="col-md-4 control-label" for="filebutton">Slika</label>
              <div class="col-md-4">
                 <input id="filebutton" name="filebutton" class="input-file" type="file">
              </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Cijena (HRK)</label>  
              <div class="col-md-4">
                  <input id="textinput" name="textinput" type="text" placeholder="1.00" class="form-control input-md">
              </div>
          </div>

          <!-- Button -->
          <div class="form-group">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                  <input class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Objavi oglas"></input>
              </div>
          </div>

        </fieldset>
    </form>
</div>



</body>
</html>