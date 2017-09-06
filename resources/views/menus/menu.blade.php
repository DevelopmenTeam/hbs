<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset("assets/media/logo/HBS-Home.png") }}" width="70px" height="26px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto smooth-scroll">
        @foreach(config('menu.es.items') as $item)
        <li class="nav-item">
          <a class="nav-link" href="{{ $item['url'] }}"><i class="{{ $item['icon'] }}"></i> {{ $item['text'] }}</a>
        </li>
        @endforeach
      </ul>

      <!-- Social Icon  -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link" href="#languages">Lenguaje: <img src="{{ asset('assets/media/img/languages/spain.png') }}" style="width: 20px;"/></a>
        </li>
        {{--@foreach(config('menu.es.social') as $social)
          <li class="nav-item">
            <a class="nav-link" href="{{ $social['url'] }}"><i class="{{ $item['icon'] }}"></i></a>
          </li>
        @endforeach--}}
      </ul>
    </div>
  </div>
</nav>