{% extends "layouts/base.volt" %}

{% block content %}
<section id="fest">
    <img src="{{ cdn }}fests/{{ fest['logo'] }}" />
    <h1>{{ fest['name'] }}</h1>

    <p class="info">
        <span class="">
            {% if (fest['start_date'] != fest['end_date']) %}{{ fest['start_date'] }} - {{ fest['end_date'] }}{% else %}{{ fest['start_date'] }}{% endif %}
        </span> / <span class="location">{{ fest['city'] }}, {{ fest['state'] }}</span>
    </p>

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

    {% if schedule %}
        {% for venue in schedule %}
            <h2>{{ venue['name'] }}</h2>
            {% for date, item in venue['schedule'] %}
                <h3>{{ date }}</h3>

                <table class="schedule">
                    {% for band in item %}
                        <tr>
                            <td>
                                <p>{{ band['start_time'] }}</p>
                            </td>
                            <td>
                                <p>{{ band['end_time'] }}</p>
                            </td>
                            <td>
                                <p>
                                    <a href="{{ url }}band/{{ band['band']['slug'] }}">
                                        <img src="{{ band['band']['logo'] }}" />
                                        <p>{{ band['band']['name'] }}</p>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            {% endfor %}
        {% endfor %}
    {% else %}
        {% for venue in venues %}
            <h2>{{ venue['name'] }}</h2>
            {% for band in bands %}
                <div class="band">
                    <p>
                        <a href="{{ url }}band/{{ band['slug'] }}">
                            <img src="{{ band['logo'] }}" />
                            <p>{{ band['name'] }}</p>
                        </a>
                    </p>
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}
</section>
{% endblock %}