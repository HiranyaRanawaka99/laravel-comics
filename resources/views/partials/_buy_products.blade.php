<div class="product-container wrapper">
    <div class="product-list">
        @foreach ($products as $product)
        <div class="product-item">
            <div class="links" href="{{ $product['url']}}">
                <div class="product-image">
                    <a href="{{ $product['url']}}">
                    <img src= "{{ url('/images/buy-comics-digital-comics.png')}}">
                    </a>
                </div>
                <a :href="{{ $product['url']}}">
                    <p>{{ $product['linkName'] }}</p>
                </a>
            </div>
        </div> 
        @endforeach
    </div>
</div>