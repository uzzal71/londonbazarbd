<!-- Footer -->
<footer class="text-center text-lg-start bg-black text-muted" style="background-color: #333e4f">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between border-bottom"></section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container-fluid text-left text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="fw-bold mb-4" style="color: #e37629;">
            Need Help ?
          </h6>
          <div style="line-height: 10px; color: #fff">
            <p>Call us 01727-111 000</p>
            <p>Email us info@londonbazarbd.com</p>
            <p>Office Address 165, Suuvra Sagar Building, Ground Floor</p>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="fw-bold mb-4" style="color: #e37629;">
            Related Page
          </h6>
          <div style="line-height: 10px; color: #fff;">
            <p>
            <a href="{{ route('returns.policy') }}" class="text-reset">Returns & Refunds Policy</a>
          </p>
          <p>
            <a href="{{ route('terms.condition') }}" class="text-reset">Terms & Condition</a>
          </p>
          <p>
            <a href="{{ route('privacy.policy') }}" class="text-reset">Privacy Policy</a>
          </p>
          </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
          <!-- Links -->
          <h6 class="fw-bold mb-4" style="color: #e37629;">
            Get in Touch
          </h6>
          <!-- Right -->
          <div class="footer_social_link">
            <a href="" class="me-4">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Section -->
  <section class="">
    <div class="container-fluid text-left text-md-start mt-5">
      <img src="{{ asset('uploads/payment-gateway-webhub.png') }}" alt="Payment Method" width="100%">
    </div>
  </section>
  <!-- Section -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <a class="text-reset fw-bold copyright" href="#!">Copyright © 2022 Stitch Shop</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer-->

<style type="text/css">
.footer_social_link a {
  text-decoration: none;
}

.footer_social_link a i {
  font-size: 25px;
  color: #fff;
}
.copyright {
  text-decoration: none;
  color: #fff !important;
}


.col-xs-5ths,
.col-sm-5ths,
.col-md-5ths,
.col-lg-5ths {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

.card:hover {
  border: 1px solid #000;
  cursor: pointer;
}

.col-xs-5ths {
    width: 20%;
    float: left;
}
@media (min-width: 768px) {
.col-sm-5ths {
        width: 20%;
        float: left;
    }
}
@media (min-width: 992px) {
    .col-md-5ths {
        width: 20%;
        float: left;
    }
}
@media (min-width: 1200px) {
    .col-lg-5ths {
        width: 20%;
        float: left;
    }
}

.full-width-slider .splide__list div .img-wrap, .hero-slider .splide__list div .img-wrap {
    padding-bottom: 24% !important;
}

.splide__slide img {
  width: 100%;
}


.hero-slider .splide__pagination {
    bottom: 30%;
}

.hero-slider .splide__pagination__page {
    width: 12px;
    height: 12px;
    background: #fff;
    opacity: 1;
    border: 1px solid #000;
    margin-right: 10px;
}

.hero-slider .splide__pagination__page.is-active {
    border: 1px solid var(--primary-color);
    background: yellow;
}

.card .secondary-img {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 99;
}

.card:hover .secondary-img{
      display: inline;
  }
</style>


<style type="text/css">
  /* -- quantity box -- */

.quantity {
 display: inline-block;
 z-index: -99999;
 margin-left: 20px;
}

.quantity .input-text.qty {
 width: 35px;
 height: 40px;
 padding: 0 5px;
 text-align: center;
 background-color: transparent;
 border: 1px solid #efefef;
}

.quantity.buttons_added {
 text-align: left;
 position: relative;
 white-space: nowrap;
 vertical-align: top; }

.quantity.buttons_added input {
 display: inline-block;
 margin: 0;
 vertical-align: top;
 box-shadow: none;
}

.quantity.buttons_added .minus,
.quantity.buttons_added .plus {
 padding: 7px 10px 8px;
 height: 41px;
 background-color: #ffffff;
 border: 1px solid #efefef;
 cursor:pointer;}

.quantity.buttons_added .minus {
 border-right: 0; }

.quantity.buttons_added .plus {
 border-left: 0; }

.quantity.buttons_added .minus:hover,
.quantity.buttons_added .plus:hover {
 background: #eeeeee; }

.quantity input::-webkit-outer-spin-button,
.quantity input::-webkit-inner-spin-button {
 -webkit-appearance: none;
 -moz-appearance: none;
 margin: 0; }
 
 .quantity.buttons_added .minus:focus,
.quantity.buttons_added .plus:focus {
 outline: none; }


</style>
