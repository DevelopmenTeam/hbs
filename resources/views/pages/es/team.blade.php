<div class="container" id="team">
  <section class="section team-section pb-5">

    <!-- Section heading -->
    <h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">Nuestro Equipo</h3>
    <!-- Section description -->
    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam
      iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur accusamus
      veniam.</p>

    <!-- Grid row -->
    <div class="row text-center">

      <!-- Grid column -->
      @foreach(config('team_hbs.es.items') as $key => $item)
        <div class="col-lg-4 col-md-6 mb-r">

          <div class="avatar">
            <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1"
                 alt="First sample avatar image">
          </div>
          <h4>{{ $item['pro_title'] }} {{ $item['name'] }}</h4>
          <h6 class="font-bold indigo-text">{{ $item['position'] }}</h6>
          <p>{{ $item['mini-experience'] }}</p><br/>
          <input type="hidden" value="{{ $key }},team"/>
          <a href="#details" data-toggle="modal" data-target="#team_modal" class="btn btn-rounded btn-light-green-2 btn-hbs-team">
            <i class="fa fa-clone left"></i>Leer más</a><br/>

          @foreach($item['social'] as $social)
            <a class="icons-sm fb-ic" href="{{ $social['url'] }}"><i class="{{ $social['icon'] }}"> </i></a>
          @endforeach
        </div>
    @endforeach
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
</div>

@include('modals.team_modal', []);