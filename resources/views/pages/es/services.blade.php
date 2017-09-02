<div class="container">
  <section id="services" class="section mt-5 mb-5">

    <!-- Section heading -->
    <h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">
      Servicios</h3>

    <!-- Section description -->
    <p class="section-description pb-4 mt-3 wow fadeIn" data-wow-delay="0.2s">Duis aute irure dolor in reprehenderit
      in
      voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
      sunt
      in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="row text-center smooth-scroll">

      @foreach(config('services_hbs.services.items') as $key => $item)
        <div class="col-lg-3 col-md-12 mb-1 wow fadeIn" data-wow-delay="0.4s">

          <div class="view overlay hm-white-slight z-depth-1 z-depth-2">
            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
          </div>

          <div class="card-body">
            <a href="" class="light-green-text-2"><h5><i class="fa fa-users"></i> Public Relations</h5></a>
            <h3>{{ $item['name'] }}</h3>
            @if(!empty($item['mini-description']))
              <p>{{ $item['mini-description'] }}</p>
              <a href="#details" class="btn btn-rounded btn-light-green-2"><i class="fa fa-clone left"></i>Learn
                more</a>
            @endif
          </div>

        </div>
      @endforeach

    </div>
  </section>
</div>