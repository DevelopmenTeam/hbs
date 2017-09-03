<header id="home_hbs">
  <!-- Navbar -->
  @include('menus.menu', [])

  <!-- Video -->
  <section class="view intro-video">
    <video poster="{{ asset('assets/media/img/img1.jpg') }}" playsinline autoplay muted loop>
      <source src="{{ asset('assets/media/video/Lines.mp4') }}" type="video/mp4">
    </video>
    <div class="hm-gradient">
      <div class="full-bg-img">
        <div class="container flex-center">
          <div class="row pt-5 mt-3">
            <div class="col-md-12 white-text text-center smooth-scroll">
              <div class="wow fadeInDown" data-wow-delay="0.2s">


                <img src="{{ asset('assets/media/logo/header_hbs.png') }}" style="width: 100%;"/>


                {{--<h3 class="display-3 font-bold white-text mb-2">HBS Consultores Turisticos</h3>
                <hr class="hr-light my-4">
                <h4 class="subtext-header mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur, nihil voluptatem.</h4>
              </div>
              <a href="#about" data-offset="90" class="btn btn-rounded btn-light-green-2 wow fadeInUp" data-wow-delay="0.2s"><i class="fa fa-home"></i> Visit us</a>--}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</header>