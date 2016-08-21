{% extends "templates/base.volt" %}

{% block head %}
<style type="text/css">
	.aParent div {
  float: left;
  clear: none; 
}
</style>

{% endblock %}

{% block content %}

	<div class="container">

		{% for ad in ads %}

			<form class="form-horizontal" style="background-color:#d9d9d9">
				<fieldset>
					<legend>{{ ad.title }}</legend>	

					<div class="col-md-6">
						Kategorija: {{ ad.category }} <br>
						Lokacija: {{ ad.location }} <br>
						Opis oglasa: {{ ad.description }} <br>
						Cijena: {{ ad.price }} HRK
						<br><br>
					</div>

					<div class="col-md-6">
						{% if ad.picture != NULL %}
						<img src="{{ ad.picture }}" style="border:3px solid black;" height="200" alt="Slika">
						{% endif %}
						<br><br>
					</div>
				</fieldset>
			</form>
			<br>

		{% endfor %}

	</div>

{% endblock %}