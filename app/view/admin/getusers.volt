{% extends "templates/admin.volt" %}
{% block head %}
{% endblock %}


{% block content %}

	<div class="container" >
		<legend>Korisnici</legend>
		{% for user in users %}
		{{ user.name }}
		{{ user.email }}
		{{ user.role }}
		{{ user.created_at }}
		<hr>
		{% endfor %}

	</div>

{% endblock %}
