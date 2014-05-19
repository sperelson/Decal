---
layout: blogview
title: Home
permalink: /root/index.php
relurl: /
---

$list = Blog::getlist(1, 20, 0);
var_dump($list);
echo "The first page people see - a list of blog posts";