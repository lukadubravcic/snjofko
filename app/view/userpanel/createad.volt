{% extends "templates/user_panel.volt" %}

{% block content %}
<div class="container">
    <form class="form-horizontal" method="post" action="{{ url('userpanel/savead') }}" enctype="multipart/form-data">
        <fieldset>

          <!-- Form Name -->
          <legend>Objava oglasa</legend>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Naziv oglasa</label>  
                  <div class="col-md-4">
                      <input id="textinput" name="title" type="text" placeholder="" class="form-control input-md"> 
                  </div>
          </div> 

          <!-- Select Basic -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="selectbasic">Kategorija</label>
              <div class="col-md-4">
                  <select id="selectbasic" name="category" class="form-control">
                      {% for category in categories %}
                          <option value="{{ category }}">{{ category }}</option>                      
                      {% endfor %}
                  </select>
              </div>
          </div>

          <!-- Select Basic -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="selectbasic">Županija</label>
              <div class="col-md-4">
                  <select id="selectbasic" name="location" class="form-control">
                      {% for area in areas %}
                          <option value="{{ area }}">{{ area }}</option>                      
                      {% endfor %}
                  </select>
              </div>
          </div>

          <!-- Textarea -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textarea">Tekst oglasa</label>
              <div class="col-md-4">                     
                  <textarea class="form-control" id="textarea" name="description"></textarea>
              </div>
          </div>

          <!-- File Button --> 
          <div class="form-group">
              <label class="col-md-4 control-label" for="filebutton">Slika</label>
              <div class="col-md-4">
                 <input id="filebutton" name="picture" class="input-file" type="file">
              </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
              <label class="col-md-4 control-label" for="textinput">Cijena (HRK)</label>  
              <div class="col-md-4">
                  <input id="textinput" name="price" type="text" placeholder="1.00" class="form-control input-md">
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
{% endblock %}