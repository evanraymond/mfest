{% extends "layouts/base.volt" %}

{% block content %}
	<section id="band">
		<img class="logo" src="{{ band['logo'] }}" alt="{{ band['name'] }}" title="{{ band['name'] }}" />
		<h1>{{ band['name'] }}</h1>
		<ul>
		  <li>Years Active: {{ band['years_active'] }}</li>
		  <li>From: {{ band['origin'] }}</li>
		  <li>Genre: </li>
		</ul>

        <ul>
            {% for link in links %}
                <li>
                    {% if link['type'] == 'facebook' %}
                        <i class="fab fa-facebook"></i>
                    {% elseif link['type'] == 'wikipedia' %}
                        <i class="fab fa-wikipedia-w"></i>
                    {% elseif link['type'] == 'twitter' %}
                        <i class="fab fa-twitter"></i>
                    {% elseif link['type'] == 'instagram' %}
                        <i class="fab fa-instagram"></i>
                    {% else %}
                        <i class="fas fa-link"></i>
                    {% endif %}

                    <a href="{{ link['url'] }}">
                        {{ link['name'] }}
                    </a>
                </li>
            {% endfor %}
        </ul>

		<div class="">
		  <p>{{ band['description'] }}</p>
		</div>

        <div class="albums">
            <ul>
                {% for album in albums %}
                    <li class="album">
                        <img src="{{ album['cover'] }}" alt="{{ album['name'] }}" title="{{ album['name'] }}" />

                        <div class="info">
                            <h2>{{ album['name'] }}</h2>
                            <p class="date">{{ album['released'] }}</p>
                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>
	</section>
{% endblock %}