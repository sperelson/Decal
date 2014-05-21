---
layout: default
---

<div class="post">

  <header class="post-header">
    <h1>{$post['title']}</h1>
    <p class="meta">{$post['created']|date_format}{if !($post['author'] === false)} • {$post['author']}}{/if}</p>
  </header>

  <article class="post-content">
  {$post['body']}
  </article>

</div>
