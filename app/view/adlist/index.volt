<h1>All Adds</h1>
{% for key, ad in ads %}
	{{ key }}.
	{{ ad.title }}.
	{{ ad.category }}.
	{{ ad.location }}.
	{{ ad.description }}.
	{{ ad.price }}.
	<br>

{% endfor %}
