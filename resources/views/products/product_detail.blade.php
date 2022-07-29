@extends('layouts.app')
 
@section('content')
<div class="container-fluid mt-5">
    <section>
        <div class="row">
        <div class="col-md-6">
            <div style="width: 98%; margin: 0px auto; border: 1px solid #f1f1f1; height: 500px;"></div>
        </div>

        <div class="col-md-6">
            <div style="width: 98%; margin: 0px auto; border: 1px solid #f1f1f1; height: auto;">
                <div class="title mt-4" style="width: 90%; margin: 0px auto; border-bottom: 1px solid #f1f1f1;">
                    <h2>NEODYMIUM অরজিনাল ম্যাগনেটিক ব্রেসলেট</h2>
                    <p><strong>SKU:</strong> BTC00419</p>
                </div>

                <div class="price_stock mt-4" style="width: 90%; margin: 0px auto; border-bottom: 1px solid #f1f1f1;">
                    <p>
                        <strong>Price:</strong> TK 1200
                    </p>
                    <p>
                        <strong>Status:</strong> <span class="text-success">In Stock</span>
                    </p>

                    <p style="font-size: 20px; font-weight: bold;">
                        Quantity:
                    </p>
                    
                </div>

                <div class="row action mt-4 mb-4" style="width: 90%; margin: 0px auto;">
                    <button class="btn btn-warning col-md-5">কার্টে যোগ করুন</button>
                    <span class="col-md-1"></span>
                    <button class="btn btn-success col-md-5">অর্ডার করুন</button>
                </div>

                <div class="row action mt-4 mb-4" style="width: 90%; margin: 0px auto;">
                    <a href="tel:01727-111 000" class="col-md-12 btn btn-primary">
                      <div style="display: flex; align-items: center; justify-content: center;">
                        <div class="mr-2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="2rem" height="2rem" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16"><path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"></path></svg>
                        </div>
                        <div>
                          <strong>Call Us:</strong> 01727-111 000
                        </div>
                      </div>
                  </a>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>


<!-- @include('products.related_products') -->

@endsection

@section('scripts')
<script type="text/javascript">
new Splide( '.similar-products' , {
  type   : 'loop',
  perPage: 5,
  perMove: 1,
  speed: 400,
  gap    : '1.75rem',
  autoplay: true,
  interval: 2000,
  pagination: false,
  pauseOnHover: true,
  rewind: true,
  lazyLoad: 'nearby',
  breakpoints: {
  '1024': {
    perPage: 3,
    gap    : '1.75rem',
  },
  '768': {
    perPage: 2,
    gap    : '0.75rem',
  },
}
}).mount();
</script>
@endsection
