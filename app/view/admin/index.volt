{% extends "templates/admin.volt" %}
{% block head %}

{% endblock %}
{% block content %}

<div class="container" >
	<!-- Example row of columns -->
	<div class="row">

		<div class="col-md-4">
			<a href="{{ url('adlist/index/Auto-Moto') }}" class="btn btn-block btn-lg btn-warning"> Auto-Moto</a>			
		</div>
		<div class="col-md-4">
			
			<a href="{{ url('adlist/index/Nekretnine') }}" class="btn btn-block btn-lg btn-warning"> Nekretnine</a>
			
		</div>
		<div class="col-md-4">
			<a href="{{ url('adlist/index/Usluge') }}" class="btn btn-block btn-lg btn-warning">Usluge</a>
			
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-4">
			<a href="{{ url('adlist/index/Elektronika') }}" class="btn btn-block btn-lg btn-warning">Elektronika</a>
			
		</div>
		<div class="col-md-4">
			<a href="{{ url('adlist/index/Audio-Video') }}" class="btn btn-block btn-lg btn-warning">Audio-Video</a>
			
		</div>
		<div class="col-md-4">
			
			<a href="{{ url('adlist/index/Sjekire') }}" class="btn btn-block btn-lg btn-warning">Sjekire</a>

			
		</div>
	</div>


</div>

{% endblock %}