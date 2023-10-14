<?php


?>


<div class="header-line">
    <p>DV power visa</p>
</div>
<div class="header-container wrapper">
    <div class="div-logo">
    <img src= "{{ url('/images/dc-logo.png') }}" alt="DC-logo">
      </div>
        <ul>
          <li>
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href= " {{ route('home') }}">
                HOME
            </a>
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href= " {{ route('home') }}">
                LINK
            </a>
         </li>
    </ul>
</div>