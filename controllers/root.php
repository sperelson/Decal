---
layout: blogview
title: Home
permalink: /root/index.php
relurl: /
---

$posts = Blog::getlist(1, 20, 0);

$smarty = new Smarty;
$smarty->assign('posts', $posts);

// display it
{% assign partsofpath = page.url | remove_first: '/' | remove_first: '/' | split: '/' %}
$smarty->display('{% for parts in partsofpath %}../{% endfor %}views/root.tpl');