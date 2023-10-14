<?php


?>


<div class="header-line">
    <p>DV power visa</p>
</div>
<div class="header-container wrapper">
    <div class="div-logo">
    <img src= "{{ url('/images/dc-logo.png') }}" alt="DC-logo">
    </div>
    <div class="links">
      @foreach ($header_links as $link)
      <ul>
        <li>
          <a class="nav-link" href= " {{ $link['url'] }}">
            {{ $link['text']}}
          </a>
        </li>
      </ul>
      @endforeach
    </div>

    <input class="search" placeholder="search">
</div>
