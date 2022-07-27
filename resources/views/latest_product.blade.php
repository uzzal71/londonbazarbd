<section class="mb-5">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-6">
                <h3>LATEST PRODUCTS</h3>
            </div>
            <div class="col-md-6">
                <a href="#!" class="btn btn-warning" style="float: right;">Show All</a>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <?php for ($i=0; $i < 48; $i++) { ?>
            <div class="col-md-5ths col-xs-6 mb-4">
                <div class="card">
                  <img class="card-img-top" src="{{ asset('uploads/products/reading-glass-510x510.webp') }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Focus Adjustable Dial Vision Reading Glasses Variable Lens</h5>
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