---
layout: php
---
{% assign partsofpath = page.url | remove_first: '/' | remove_first: '/' | split: '/' %}
require '{% for parts in partsofpath %}../{% endfor %}vendor/autoload.php';
{{ content }}