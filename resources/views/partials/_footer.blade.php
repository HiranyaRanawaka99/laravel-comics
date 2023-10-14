<div class= "footer-container wrapper">
    <div class = "links">
        @foreach ($footer_links as $link)
        <div>
            <h4> {{ $link['title'] }} </h4>
            @foreach($link['footerLinks'] as $singleLink)
            <ul class="single-link">
                <li> <a href="#">{{ $singleLink }} </a></li>
            </ul>
            @endforeach 
        </div>
        @endforeach
    </div>
    <div class="footer-logo"> 
        <img src="{{ url('/images/dc-logo-bg.png')}}" alt="">
    </div>
</div>