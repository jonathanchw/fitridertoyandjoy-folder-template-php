<section class="pdt-section pdt-section7" id="order">

    <div class="container" id="products">
        <div class="product-wrapper row">
            <!-- all product goes here-->

            @foreach ($page->products as $product)
            @if (empty($product->pivot->external_offer_id))
            @continue
            @endif
            <div class="product-section product-section7 col-lg-4 col-12">
                <div class="product-block">
                    <img class="prod_img7" src="/images/{{ $product->images[0]->image }}">

                    <div class="product-details">
                        <!-- <p class="prod_category6">Garden</p> -->
                        <h5 class="product-title product-name7">{{ $product->name }}</h5>
                        <span class="prod-price">
                            <p class="prod_price7">
                                <span class=""> ${{ $product->price }}</span>
                            </p>
                        </span>
                        <a href="/products/{{ $product->slug }}" class="btn_shop btn_shop7" id="btn_shop">
                            <button class="btn btn-primary btn-shop shop-btn-color">Buy It Now</button>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>