@extends('layouts.base')

@section('modal')

  @php
    $item = config('services_hbs.es.items.'.$id);
  @endphp
  <div class="modal fade show modal--opacity" data-wow-delay="0.4s" id="services_modal" tabindex="-1" role="dialog"
       style="display: block">
    <div class="modal-dialog cascading-modal" role="document">
      <div class="modal-content">
        <div class="modal-c-tabs">
          <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
            <li class="nav-item waves-effect waves-light">
              <a class="nav-link active" data-toggle="tab" href="#panel17" role="tab"><i
                  class="fa fa-certificate mr-1"></i>
                {{ $item['name'] }}</a>
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in show active" id="panel17" role="tabpanel">
              <div class="modal-body mb-1">
                <div class="md-form form-sm">
                  <div class="view overlay hm-white-slight">
                    <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}" class="img-responsive" height="150px" width="150px">
                  </div>
                </div>

                <div class="md-form form-sm">
                  <p>{{ $item['description'] }}</p>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger-2 btn-sm close-service"
                        data-dismiss="modal"><i class="fa fa-close" style="color: white"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- btn-outline-info waves-effect ml-auto--}}

@endsection