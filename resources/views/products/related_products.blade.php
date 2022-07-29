<section class="mb-2">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center text-bold">RELATED PRODUCTS</h3>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid mb-5">
    <section id="image-carousel-offer4" class="offer4" aria-label="Custom Arrows Example">
      <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev">
            Prev
        </button>
        <button class="splide__arrow splide__arrow--next">
            Next
        </button>
  </div>
      <div class="splide__track">
            <ul class="splide__list">
                <?php for ($i=0; $i < 10; $i++) { ?>
                <div class="splide__slide">
                    <div class="card">
                    <a href="{{ route('get.product', 'Focus Adjustable Dial Vision Reading Glasses Variable Lens') }}">
                      <img class="primary-image" src="{{ asset('uploads/products/reading-glass-510x510.webp') }}" alt="Primary Image">
                        <img class="secondary-img" src="{{ asset('uploads/products/saati-3198-min.webp') }}" alt="Secondary Image">
                        </a>
                      <div class="card-body">
                        <a href="{{ route('get.product', 'Focus Adjustable Dial Vision Reading Glasses Variable Lens') }}">
                        <h5 class="card-title">Focus Adjustable Dial Vision Reading Glasses Variable Lens</h5>
                        </a>
                        <p class="card-text" style="font-weight: bold; font-size: 16px;">TK. 1200 
                            <span style="color: #f1f1f1; text-decoration: line-through;">TK. 1400</span></p>
                        <a href="#" class="btn btn-success d-block">অর্ডার করুন</a>
                      </div>
                    </div>
                </div>
                <?php } ?>
            </ul>
      </div>
    </section>
</div>
