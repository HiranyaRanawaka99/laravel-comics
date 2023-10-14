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

<div class="footerBottom wrapper">
      <button class="sign-up-btn">
        SIGN-UP NOW!
      </button>
    <div class="social">
      <p>FOLLOW US</p>
        <div 
          class="social-icons d-flex gap-2">
          <a href="#">
            <img src=" {{ url('/images/footer-facebook.png')}}">
         </a>
         <a href="#">
            <img src=" {{ url('/images/footer-pinterest.png')}}">
         </a>
         <a href="#">
            <img src=" {{ url('/images/footer-twitter.png')}}">
         </a>
         <a href="#">
            <img src=" {{ url('/images/footer-youtube.png')}}">
         </a>
        </div>
    </div>
  </div>