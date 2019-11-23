---
layout: default
title: Services
permalink: /services
---

<div class="services">
  {% for post in site.projects %}
    <div class="service">

      <h1><a href="{{ site.baseurl }}{{ service.url }}">{{ service.title }}</a></h1>

      <div class="entry">
        {{ post.excerpt }}
      </div>

      <a href="{{ site.baseurl }}{{ service.url }}" class="read-more">More Information</a>
    </div>
  {% endfor %}
</div>
