{% extends "layouts/base.volt" %}

{% block content %}
    <section id="fests">
        <div class="options">
            State:
            <select>
                <option>CA</option>
                <option>MD</option>
                <option>MI</option>
                <option>PA</option>
            </select>
        </div>

        {% for fest in fests %}
            <div class="fest">
                <a href="{{ url }}fest/{{ fest['slug'] }}"><img src="{{ cdn }}fests/{{ fest['logo'] }}" /></a>

                <h2><a href="{{ url }}fest/{{ fest['slug'] }}">{{ fest['name'] }}</a></h2>

                <p class="info"><span class="">{{ fest['start_date'] }}</span> / <span class="location">{{ fest['city'] }}, {{ fest['state'] }}</span></p>
            </div>
        {% endfor %}
    </section>
{% endblock %}