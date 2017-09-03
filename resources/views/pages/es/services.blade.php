<div class="container-fluid" id="services">
  <div class="container">
    <section class="section mt-5 mb-5">
      <h3 class="text-center mb-5 mt-5 pt-5 font-up font-bold grey-text-2 wow fadeIn" data-wow-delay="0.2s">
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
                {{--@if(!empty($item['mini-description']))--}}
                <p>{{ $item['mini-description'] }}</p>
                {{--@endif--}}
              </div>
              <div class="card-footer">
                <a href="#details" data-toggle="modal" data-target="#services_modal" class="btn btn-rounded btn-hbs2 btn-hbs-services btn-sm">
                  <i class="fa fa-clone left"></i>
                  Leer m&aacute;s
                </a>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </section>
  </div>
</div>

<div class="modal fade modal--opacity" data-wow-delay="0.4s" id="modal_sercices" tabindex="-1" role="dialog">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item waves-effect waves-light">
            <a class="nav-link active" data-toggle="tab" href="#panel17" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
          </li>
          <li class="nav-item waves-effect waves-light">
            <a class="nav-link" data-toggle="tab" href="#panel18" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 17-->
          <div class="tab-pane fade in show active" id="panel17" role="tabpanel">

            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm">
                <i class="fa fa-envelope prefix"></i>
                <input type="text" id="form2" class="form-control">
                <label for="form2">Your email</label>
              </div>

              <div class="md-form form-sm">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="form3" class="form-control">
                <label for="form3">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info waves-effect waves-light">Log in <i class="fa fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto close-service" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 18-->
          <div class="tab-pane fade" id="panel18" role="tabpanel">

            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm">
                <i class="fa fa-envelope prefix"></i>
                <input type="text" id="form14" class="form-control">
                <label for="form14">Your email</label>
              </div>

              <div class="md-form form-sm">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="form5" class="form-control">
                <label for="form5">Your password</label>
              </div>

              <div class="md-form form-sm">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="form6" class="form-control">
                <label for="form6">Repeat password</label>
              </div>

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info waves-effect waves-light">Sign up <i class="fa fa-sign-in ml-1"></i></button>
              </div>

            </div>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto close-service" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>