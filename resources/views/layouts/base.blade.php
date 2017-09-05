<!DOCTYPE html>
<html lang="en" class="full-height">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <!-- CSRF Token -->
  <meta id="token" name="csrf-token" content="{{ csrf_token() }}">

  <title>HBS Consultores Turísticos</title>

  <!-- Meta Data -->
  <meta property="title" content="HBS Consultores Turisticos">
  <meta property="description" content="HBS Consultores Turisticos">
  <meta property="image" content="{{ asset('assets/media/logo/header_hbs.png') }}">
  <meta property="url" content="http://hbs.magma-soft.at/index.php">
  <meta property="site_name" content="http://hbs.magma-soft.at/index.php">
  <meta name="author" content="Luis Solórzano">
  <meta name="author" content="Gerardo Hernández">
  <meta name="author" content="Juan Santovenia">

  <!-- /Meta Data -->

  <!-- Material Design Bootstrap -->
  {!! Html::style('css/style.css') !!}

  <style>
    @media (max-width: 740px) {
      .full-height,
      .full-height body,
      .full-height header,
      .full-height header .view {
        height: 700px;
      }
    }
  </style>

</head>

<body class="creative-lp">
<div class="loader_hbs">

</div>

<!-- Navigation & Intro -->
@include('globals.header', [])

<!-- Main content -->
@include('pages.es.services', [])

@include('pages.es.team', [])

@include('pages.es.contact', [])

{{--<div class="container">--}}

{{--<!-- Section: About -->--}}
{{--<section id="about" class="section about mt-5 mb-5">--}}

{{--<!-- Secion heading -->--}}
{{--<h3 class="text-center mb-5 mt-5 pt-5 pb-4 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">About us</h3>--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">--}}
{{--<!-- Image -->--}}
{{--<img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%288%29.jpg" class="img-fluid z-depth-1" alt="My photo">--}}
{{--</div>--}}
{{--<!-- Grid column -->--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-lg-6 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">--}}

{{--<!-- Description -->--}}
{{--<p align="justify" class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit delectus, beatae maxime temporibus maiores quibusdam.</p>--}}
{{--<p align="justify" class="grey-text">Rem magnam ad perferendis iusto sint tempora ea voluptatibus iure, animi excepturi modi aut possimus in hic molestias repellendus illo ullam odit quia velit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>--}}
{{--<p align="justify" class="grey-text mb-5">Incidunt eligendi mollitia labore ipsum ex fugit explicabo saepe error neque beatae in, expedita eveniet quae aliquam assumenda voluptatibus! Iure dolorum, itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta expedita, maiores omnis culpa voluptatem ipsum eius, neque quod laboriosam provident quasi architecto illo consequatur harum.</p>--}}

{{--</div>--}}
{{--<!-- Grid column -->--}}

{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--</section>--}}
{{--<!-- Section: About -->--}}

{{--<hr>--}}

{{--<!-- Section: Features v.4 -->--}}
{{--<section id="features" class="section feature-box mb-5 pb-4">--}}

{{--<!-- Section heading -->--}}
{{--<h3 class="text-center mb-5 mt-5 pt-5 pb-4 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">Build your brand with us</h3>--}}

{{--<!-- Section sescription -->--}}
{{--<p class="section-description pb-4 wow fadeIn" data-wow-delay="0.2s">--}}
{{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum quas, eos officia maiores ipsam ipsum dolores reiciendis ad voluptas, animi obcaecati adipisci sapiente mollitia.</p>--}}
{{--<!-- Grid row -->--}}
{{--<div class="row features-small wow fadeIn" data-wow-delay="0.4s">--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-lg-4 col-md-12">--}}
{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-2">--}}
{{--<i class="fa fa-flag-checkered indigo-text"></i>--}}
{{--</div>--}}
{{--<div class="col-10 mb-2">--}}
{{--<h4 class="feature-title">International</h4>--}}
{{--<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-2">--}}
{{--<i class="fa fa-flask indigo-text"></i>--}}
{{--</div>--}}
{{--<div class="col-10 mb-2">--}}
{{--<h4 class="feature-title">Experimental</h4>--}}
{{--<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-2">--}}
{{--<i class="fa fa-glass indigo-text"></i>--}}
{{--</div>--}}
{{--<div class="col-10 mb-2">--}}
{{--<h4 class="feature-title">Relaxing</h4>--}}
{{--<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}
{{--</div>--}}
{{--<!-- Grid column -->--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-lg-4 col-md-12 mb-1 center-on-small-only">--}}
{{--<img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-landing.png" alt="" class="z-depth-0 img-fluid">--}}
{{--</div>--}}
{{--<!-- Grid column -->--}}

{{--<!-- Third column -->--}}
{{--<div class="col-lg-4 col-md-12">--}}
{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-2">--}}
{{--<i class="fa fa-heart light-green-text-2"></i>--}}
{{--</div>--}}
{{--<div class="col-10 mb-2">--}}
{{--<h4 class="feature-title">Beloved</h4>--}}
{{--<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-2">--}}
{{--<i class="fa fa-flash light-green-text-2"></i>--}}
{{--</div>--}}
{{--<div class="col-10 mb-2">--}}
{{--<h4 class="feature-title">Rapid</h4>--}}
{{--<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-2">--}}
{{--<i class="fa fa-magic light-green-text-2"></i>--}}
{{--</div>--}}
{{--<div class="col-10 mb-2">--}}
{{--<h4 class="feature-title">Magical</h4>--}}
{{--<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima assumenda deleniti hic.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}
{{--</div>--}}
{{--<!-- Third column -->--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--</section>--}}
{{--<!-- Section: Features v.4 -->--}}

{{--</div>--}}

{{--<!-- Streak -->--}}
{{--<div class="streak streak-photo streak-md hm-green-strong-2" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">--}}
{{--<div class="flex-center mask pattern-1">--}}
{{--<div class="text-center white-text">--}}
{{--<h2 class="h2-responsive mb-5"><i class="fa fa-quote-left" aria-hidden="true"></i> Creativity requires the courage to let go of certainties <i class="fa fa-quote-right" aria-hidden="true"></i></h2>--}}
{{--<h5 class="text-center font-italic wow fadeIn" data-wow-delay="0.2s">~ Erich Fromm</h5>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
<!-- Streak -->

{{--<div class="container">--}}

{{--<hr class="between-sections">--}}

{{--<!-- Section: Details -->--}}
{{--<section id="details" class="section mt-3 mb-5">--}}

{{--<!-- Section heading -->--}}
{{--<h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">Details</h3>--}}

{{--<!-- Section description -->--}}
{{--<p class="section-description wow fadeIn" data-wow-delay="0.2s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>--}}

{{--<!-- Grid row -->--}}
{{--<div class="row wow fadeIn" data-wow-delay="0.4s">--}}

{{--<div class="col-md-3">--}}
{{--<!--  Nav tabs  -->--}}
{{--<ul class="nav md-pills pills-primary flex-column" role="tablist">--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link active" data-toggle="tab" href="#panel21" role="tab"><i class="fa fa-users"></i> Public Relations</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" data-toggle="tab" href="#panel22" role="tab"><i class="fa fa-slack"></i> Branding</a>--}}
{{--</li>--}}
{{--<li class="nav-item">--}}
{{--<a class="nav-link" data-toggle="tab" href="#panel23" role="tab"><i class="fa fa-instagram"></i> Social Media</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}

{{--<div class="col-md-8">--}}
{{--<!--  Tab panels  -->--}}
{{--<div class="tab-content vertical">--}}

{{--<!-- Panel 1 -->--}}
{{--<div class="tab-pane fade show in active" id="panel21" role="tabpanel">--}}
{{--<br>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--</div>--}}
{{--<!-- Panel 1 -->--}}

{{--<!-- Panel 2 -->--}}
{{--<div class="tab-pane fade" id="panel22" role="tabpanel">--}}
{{--<br>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--</div>--}}
{{--<!-- Panel 2 -->--}}

{{--<!-- Panel 3 -->--}}
{{--<div class="tab-pane fade" id="panel23" role="tabpanel">--}}
{{--<br>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione--}}
{{--porro voluptate odit minima.</p>--}}

{{--</div>--}}
{{--<!-- Panel 3 -->--}}

{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--</section>--}}
{{--<!-- Section: Details -->--}}

{{--</div>--}}

{{--<!-- Streak -->--}}
{{--<div class="streak streak-photo streak-long-2 hm-black-strong" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Work/full%20page/img%20%281%29.jpg')">--}}
{{--<div class="mask flex-center">--}}
{{--<div class="container">--}}

{{--<h3 class="text-center white-text mb-3 font-up font-bold wow fadeIn" data-wow-delay="0.2s">Great people trusted our services</h3>--}}
{{--<h5 class="white-text text-center mb-5 wow fadeIn" data-wow-delay="0.2s">See the real numbers about our awesome company</h5>--}}

{{--<!--First row -->--}}
{{--<div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s">--}}

{{--<!--First column -->--}}
{{--<div class="col-md-3 mb-2">--}}
{{--<h1 class="light-green-text-2 mb-1 font-bold">+950</h1>--}}
{{--<p>Themes and Templates Sales</p>--}}
{{--</div>--}}
{{--<!-- First column -->--}}

{{--<!--Second column -->--}}
{{--<div class="col-md-3 mb-2">--}}
{{--<h1 class="light-green-text-2 mb-1 font-bold">+150</h1>--}}
{{--<p>Followers love and trust us</p>--}}
{{--</div>--}}
{{--<!-- Second column -->--}}

{{--<!--Third column -->--}}
{{--<div class="col-md-3 mb-2">--}}
{{--<h1 class="light-green-text-2 mb-1 font-bold">+85</h1>--}}
{{--<p>Items selling on MDBootstrap</p>--}}
{{--</div>--}}
{{--<!-- Third column -->--}}

{{--<!--Fourth column -->--}}
{{--<div class="col-md-3">--}}
{{--<h1 class="light-green-text-2 mb-1 font-bold">+246</h1>--}}
{{--<p>Working hours this year wow</p>--}}
{{--</div>--}}
{{--<!-- Fourth column -->--}}

{{--</div>--}}
{{--<!-- First row -->--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Streak -->--}}
{{--<div class="streak streak-long-2 background-grey">--}}
{{--<div class="flex-center">--}}
{{--<div class="container">--}}

{{--<h4 class="text-center mb-5 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">Some of the world's most respected companies trust MDB</h4>--}}

{{--<!--First row-->--}}
{{--<div class="row">--}}

{{--<!--First column-->--}}
{{--<div class="col-md-3 mb-1 flex-center">--}}
{{--<img src="https://mdbootstrap.com/img/Photos/Template/10.png" class="img-fluid">--}}
{{--</div>--}}
{{--<!--First column-->--}}

{{--<!--Second column-->--}}
{{--<div class="col-md-3 mb-1 flex-center">--}}
{{--<img src="https://mdbootstrap.com/img/Photos/Template/11.png" class="img-fluid">--}}
{{--</div>--}}
{{--<!--Second column-->--}}

{{--<!--Third column-->--}}
{{--<div class="col-md-3 mb-1 flex-center">--}}
{{--<img src="https://mdbootstrap.com/img/Photos/Template/12.png" class="img-fluid">--}}
{{--</div>--}}
{{--<!--Third column-->--}}

{{--<!--Fourth column-->--}}
{{--<div class="col-md-3 flex-center">--}}
{{--<img src="https://mdbootstrap.com/img/Photos/Template/13.png" class="img-fluid">--}}
{{--</div>--}}
{{--<!--Fourth column-->--}}

{{--</div>--}}
{{--<!--First row-->--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Streak -->--}}

{{--<div class="container">--}}

{{--<!-- Section: Contact v.2 -->--}}
{{--<section id="contact" class="section mb-5">--}}

{{--<!-- Section heading -->--}}
{{--<h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">Contact us</h3>--}}

{{--<!-- Section sescription -->--}}
{{--<p class="section-description mb-5 wow fadeIn" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus veniam.</p>--}}

{{--<div class="row wow fadeIn" data-wow-delay="0.4s">--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-md-8 col-lg-9">--}}
{{--<form>--}}
{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<!-- Grid column -->--}}
{{--<div class="col-md-6">--}}
{{--<div class="md-form">--}}
{{--<div class="md-form">--}}
{{--<input type="text" id="form41" class="form-control">--}}
{{--<label for="form41" class="">Your name</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-md-6">--}}
{{--<div class="md-form">--}}
{{--<div class="md-form">--}}
{{--<input type="text" id="form52" class="form-control">--}}
{{--<label for="form52" class="">Your email</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<div class="col-md-12">--}}
{{--<div class="md-form">--}}
{{--<input type="text" id="form51" class="form-control">--}}
{{--<label for="form51" class="">Subject</label>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}

{{--<!-- Grid row -->--}}
{{--<div class="row">--}}
{{--<!-- Grid column -->--}}
{{--<div class="col-md-12">--}}

{{--<div class="md-form">--}}
{{--<textarea type="text" id="form76" class="md-textarea"></textarea>--}}
{{--<label for="form76">Your message</label>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid row -->--}}
{{--</form>--}}

{{--<div class="center-on-small-only mb-5">--}}
{{--<a class="btn btn-rounded btn-light-green-2">Send</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--<!-- Grid column -->--}}

{{--<!-- Grid column -->--}}
{{--<div class="col-md-4 col-lg-3">--}}
{{--<ul class="contact-icons float-md-right">--}}
{{--<li><i class="fa fa-map-marker fa-2x"></i>--}}
{{--<p>New York, NY 10012, USA</p>--}}
{{--</li>--}}

{{--<li><i class="fa fa-phone fa-2x"></i>--}}
{{--<p>+ 01 234 567 89</p>--}}
{{--</li>--}}

{{--<li><i class="fa fa-envelope fa-2x"></i>--}}
{{--<p>contact@gmail.com</p>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--<!-- Grid column -->--}}

{{--</div>--}}
{{--</section>--}}
{{--<!-- Section: Contact v.2 -->--}}

{{--</div>--}}
<!-- Main content -->

<!-- Footer -->
@include('globals.footer', [])
<!-- Footer -->

<!-- JQuery -->
{!! Html::script('js/lib/jquery-3.1.1.min.js') !!}
{!! Html::script('js/lib/popper.min.js') !!}
{!! Html::script('js/lib/bootstrap.min.js') !!}
{!! Html::script('js/lib/mdb.min.js') !!}
{!! Html::script('js/lib/matchHeight.js') !!}
{!! Html::script('js/hbs/loader.js') !!}
{!! Html::script('js/hbs/match_height.js') !!}
{!! Html::script('js/hbs/modal.js') !!}

</body>

</html>