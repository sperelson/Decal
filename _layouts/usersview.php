---
layout: usersmodel
---
{% assign partsofpath = page.url | remove_first: '/' | remove_first: '/' | split: '/' %}
require_once('{% for parts in partsofpath %}../{% endfor %}vendor/autoload.php');
{{ content }}