<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>It.Next - IT Service Responsive Html Theme</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />

@include('layouts._partials.styles')

</head>
<body id="default_theme" class="it_serv_shopping_cart it_checkout checkout_page">
<!-- loader -->
{{-- <div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div> --}}
<!-- end loader -->

<!-- header -->
@include('layouts._partials.header')
<!-- end header -->

<!-- inner page banner -->
@include('layouts._partials.banner')
<!-- end inner page banner -->

@yield('content')


<!-- section -->
@include('layouts._partials.testimonial')
<!-- end section -->
<!-- section -->
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="contact_us_section">
            <div class="call_icon"> <img src="images/it_service/phone_icon.png" alt="#" /> </div>
            <div class="inner_cont">
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class="button_Section_cont"> <a class="btn dark_gray_bt" href="it_contact.html">Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- footer -->
@include('layouts._partials.footer')
<!-- end footer -->
<!-- js section -->
@include('layouts._partials.scripts')
</body>
</html>
