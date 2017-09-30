<div class="container-fluid" id="content-team">
<div class="container" id="team">
  <section class="section team-section">

    <!-- Section heading -->
    <h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold team-title--color wow fadeIn" data-wow-delay="0.2s">
      Nuestro Equipo
    </h3>
    <!-- Section description -->

    <!-- Grid row -->
    <div class="row text-center">

      <!-- Grid column -->
      @foreach(config('team_hbs.es.items') as $key => $item)
        <div class="col-md-4">
          <div class="col-md-12 mb-r hbs-team-match-height team_card--style">

          <div class="avatar" style="margin-top: 0.7rem;">
            <img src="{{ asset($item['image']) }}" class="rounded-circle z-depth-1"
                 alt="First sample avatar image">
          </div>
          <h4 class="name-team">{{ $item['pro_title'] }} {{ $item['name'] }}</h4>
          <h6 class="font-bold">{{ $item['position'] }}</h6>
          <p style="font-size: 15px;">{{ $item['mini-experience'] }}</p><br/>
          <input type="hidden" value="{{ $key }},team"/>
          <a href="#details" data-toggle="modal" data-target="#team_modal" class="btn btn-hbs2 btn-rounded btn-sm btn-hbs-team">
            <i class="fa fa-clone left"></i>Leer más</a><br/>

          @foreach($item['social'] as $social)
            <a class="icons-sm" target="_blank" href="{{ $social['url'] }}"><i class="{{ $social['icon'] }}"> </i></a>
          @endforeach
        </div>
        </div>
    @endforeach
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
</div>
</div>
@include('modals.team', [])