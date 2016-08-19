<!DOCTYPE html>
<html lang="en">
<head>
	{{ get_title() }}
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ this.assets.outputCss('style') }}
	{{ this.assets.outputJs('js') }}
	{% block head %}
	{% endblock %}
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
			<a class="navbar-brand" href="{{ url('index/') }}">Snjofko</a>
		</div>

		<div class="navbar-collapse collapse">

			<ul class="nav navbar-nav">
				<li><a href="{{ url('index/about') }}">O nama</a></li>				
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
					<li><a href="{{ url('login/') }}">Prijava</a></li>
					<li><a href="{{ url('login/register') }}">Registracija</a></li>
				
				</ul>
			</div>
		</div>
	</div>
</nav>
</div>
	 
{{ flash.output() }}

{% block content %}
{% endblock %}


</body>
</html>