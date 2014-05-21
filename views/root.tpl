---
layout: default
---

<div class="home">

  <h1>Posts</h1>

  <ul class="posts">
{foreach $posts as $post}
      <li>
        <span class="post-date">{$post['created']|date_format}</span>
        <a class="post-link" href="/post?id={$post['id']}">{$post['title']}</a>
      </li>
{/foreach}
  </ul>

</div>
