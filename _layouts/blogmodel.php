---
layout: php
---
{% assign partsofpath = page.url | remove_first: '/' | remove_first: '/' | split: '/' %}
require_once('{% for parts in partsofpath %}../{% endfor %}models/blog.php');
{{ content }}