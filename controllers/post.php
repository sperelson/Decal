---
layout: blogview
permalink: /root/post/index.php
---

$post = Blog::getpost(1);

$smarty = new Smarty;
$smarty->assign('post', $post);

// display it
{% assign partsofpath = page.url | remove_first: '/' | remove_first: '/' | split: '/' %}
$smarty->display('{% for parts in partsofpath %}../{% endfor %}views/post.tpl');