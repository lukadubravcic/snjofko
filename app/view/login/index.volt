{% extends "templates/base.volt" %}

{% block head %}

  {{ this.assets.outputCss('other') }}

{% endblock %}

{% block content %}

<div class="container">

<legend>Prijava</legend>
<br><br>
  <form class="form-signin" method="post" action="{{ url('login/dologin') }}">
      <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <input type="password" name="password" class="form-control" placeholder="Password" required>
      <input class="btn btn-lg btn-primary btn-block btn-warning" type="submit" value="Sign in"></input>
      <input type="hidden" name="{{ security.getTokenKey() }}" value="{{ security.getTokenKey() }}" />
  </form>

</div>


{% endblock %}