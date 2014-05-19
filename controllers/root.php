---
layout: blogview
title: Home
permalink: /root/index.php
relurl: /
---

$list = Blog::getlist(1, 20, 0);
//var_dump($list);
// echo "The first page people see - a list of blog posts";
// create object

$smarty = new Smarty;

//$smarty->assign('name', 'george smith');
//$smarty->assign('address', '45th & Harris');
// display it
{% assign partsofpath = page.url | remove_first: '/' | remove_first: '/' | split: '/' %}
$smarty->display('{% for parts in partsofpath %}../{% endfor %}views/root.tpl');