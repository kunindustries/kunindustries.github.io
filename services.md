---
layout: default
title: Services
permalink: /services/
---

<div class="services">
  {% for post in site.posts %}
    <div class="service">

      <h1><a href="{{ site.baseurl }}{{ service.url }}">{{ service.title }}</a></h1>

      <div class="entry">
        {{ post.excerpt }}
      </div>

      <a href="{{ site.baseurl }}{{ service.url }}" class="read-more">More Information</a>
    </div>
  {% endfor %}
</div>


---

[This website is on GitHub.](https://github.com/kunindustries/kunindustries.github.io), and it was built using [Jekyll-Now](https://github.com/barryclark/jekyll-now)
