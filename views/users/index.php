<h1>Список пользователей</h1>

{% for user in users %}
<li> {{ user }}</li>
{% else %}
No users have been found.
{% endfor %}