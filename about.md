---
layout: page
title: About
permalink: /root/about/
relurl: /about/
---

Decal is a Jekyll based project that forces Jekyll into generating a PHP driven blog. Jekyll is a static site generator and Decal is a proof of concept.

The generated PHP driven blog attempts to be MVC with models off to one side, Smarty based views on the other side, and controllers that make the whole set work.

Smarty was chosen as the server side templating engine as it does not overlap with Liquid at all.

Besides the obvious benefits to using Jekyll to generate a PHP website (there aren't any obvious benefits) the primary benefit is to troll anyone who insists on believing that static site generators can only be used to generate static sites. Also, it is interesting to see the difference between the overhead incurred by the current routing model of modern PHP frameworks and using a more traditional, if archaic, form of PHP site design.
