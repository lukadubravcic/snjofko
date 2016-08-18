
{% block content %}

	<h1>All Users</h1>
	<hr>
	{% for user in all %}
		{{ user.id }}
		{{ user.email }}
		<br />
	{% endfor %}

{% endblock %}