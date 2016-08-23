{% extends "templates/admin.volt" %}


{% block head %}
{% endblock %}

{% block content %}
	

	<div class="container">

		{% for ad in ads %}
		{% if ad.deleted != 1 %}

			<form class="form-horizontal" method="post" action="{{ url('userpanel/deleteAd') }}" style="background-color:#d9d9d9">
				<fieldset>
					<legend>{{ ad.title }}</legend>	

					<div class="col-md-6">
						<input type="hidden" name="ad_title" value="{{ ad.title }}"/>
						Kategorija: {{ ad.category }} <br> <input type="hidden" name="ad_category" value="{{ ad.category }}"/>
						Lokacija: {{ ad.location }} <br> <input type="hidden" name="ad_id" value="{{ ad.id }}"/>
						Opis oglasa: {{ ad.description }} <br> <input type="hidden" name="ad_location" value="{{ ad.location }}"/>
						Cijena: {{ ad.price }} HRK <br><br> <input type="hidden" name="ad_price" value="{{ ad.price }}"/>
						<input type="hidden" name="ad_id" value="{{ ad.id }}"/>
						{% if session.get('role') != 'guest' %}

							{% if session.get('id') == ad.user_id or session.get('role') == 'admin' %}
								<!-- <div class="col-md-3">
									<input name="submit" id="change" class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Izmjena"></input>
								</div> -->
								<div class="col-md-4">
									<input name="submit" id="delete" class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Brisanje"></input>
								</div>
								<br>
							{% endif %}
							
						{% endif %}
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
		{% endif %}
		{% endfor %}

	</div>


{% endblock %}