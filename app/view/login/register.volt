{% extends "templates/base.volt" %}

{% block head %}
  {{ this.assets.outputCss('other') }}
{% endblock %}

{% block content %}
<div class="container">

    <legend>Registracija</legend>
    <br><br>

    <form class="form-signin" method="post" action="{{ url('login/doRegister') }}">

        <input type="name" name="name" class="form-control" placeholder="Korisničko ime" required autofocus>

        <input type="email" name="email" class="form-control" placeholder="Email adresa" required autofocus>

        <input type="password" name="password" class="form-control" placeholder="Lozinka" required>

        <input type="password" name="confirm_password" class="form-control" placeholder="Ponovi lozinku" required>

        <input class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Prijava"></input>

        <input type="hidden" name="{{ security.getTokenKey() }}" value="{{ security.getTokenKey() }}" />

    </form>

</div> <!-- /container -->
{% endblock %}