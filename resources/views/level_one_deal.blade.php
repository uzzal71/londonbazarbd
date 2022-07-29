<section class="mb-2">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>হট ডিল !!</h3>
            </div>
            <div class="col-md-6">
                <a href="#!" class="btn btn-warning" style="float: right;">Show All</a>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <section id="image-carousel-level-one" class="offer1" aria-label="Beautiful Images">
      <div class="splide__track">
            <div class="splide__list">
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
            </div>
      </div>
    </section>
</div>