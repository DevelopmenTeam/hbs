<div class="container-fluid" id="services">
  <div class="container">
    <section class="section mt-5 mb-5">
      <h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold wow fadeIn" data-wow-delay="0.2s">
        Servicios
      </h3>

      <div class="row text-center smooth-scroll">
        @foreach(config('services_hbs.es.items') as $key => $item)
          <div class="col-lg-3 col-md-3 mb-1 wow fadeIn" data-wow-delay="0.4s">
            <div class="hbs-services hbs-services-match-height">
              <div class="view overlay hm-white-slight">
                <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
              </div>

              <div class="card-body hbs-services-card-body-match-height">
                <h4>{{ $item['name'] }}</h4>
                <p>{{ $item['mini-description'] }}</p>
              </div>
              <div class="card-footer">
                <input type="hidden" value="{{ $key }}"/>
                @if(!empty($item['mini-description']))
                  <a href="#details" data-toggle="modal" data-target="#services_modal"
                     class="btn btn-rounded btn-hbs2 btn-hbs-services btn-sm">
                    <i class="fa fa-clone left"></i>
                    Leer m&aacute;s
                  </a>
                @endif
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </section>
  </div>
</div>

@include('modals.services_modal', []);
