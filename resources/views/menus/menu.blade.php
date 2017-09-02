<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">

  <div class="container">
    <a class="navbar-brand" href="#">
      HBS Consultores Turisticos
      {{--<img src="{{ asset("img/logo.png") }}">--}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto smooth-scroll">
        {{--{{ dump(config('menu.es.items')) }}--}}
        @foreach(config('menu.es.items') as $item)
        <li class="nav-item">
          <a class="nav-link" href="{{ $item['url'] }}"><i class="{{ $item['icon'] }}"></i> {{ $item['text'] }}</a>
        </li>
        @endforeach
      </ul>
      <!-- Social Icon  -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-facebook light-green-text-2"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-twitter light-green-text-2"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"><i class="fa fa-instagram light-green-text-2"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>