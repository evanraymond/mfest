{% extends "layouts/base.volt" %}

{% block content %}
    <section id="fests">
        <div class="options">
            State:
            <select id="select-state">
                <option>All</option>
                {% for state, count in states %}
                    <option value="{{ state }}">{{ state }} ({{ count }})</option>
                {% endfor %}
            </select>
        </div>

        <h1>Fests</h1>

        {% for fest in fests %}
            <div class="fest" data-state="{{ fest['state'] }}">
                <a href="{{ url }}fest/{{ fest['slug'] }}"><img src="{{ cdn }}fests/{{ fest['logo'] }}" /></a>

                <h2><a href="{{ url }}fest/{{ fest['slug'] }}">{{ fest['name'] }}</a></h2>

                <p class="info"><span class="">{{ fest['start_date'] }}</span> / <span class="location">{{ fest['city'] }}, {{ fest['state'] }}</span></p>
            </div>
        {% endfor %}
    </section>
{% endblock %}