    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand" href=""><img id="logo" height="42" width="auto" src="{{ asset('assets/img/logo.png') }}"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                @if(Route::currentRouteName()=='home')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                  </li>
                @if(Route::currentRouteName()=='about-us')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                    <a class="nav-link" href="{{ route('about-us') }}">About Us</a>
                  </li>
                @if(Route::currentRouteName()=='how-it-works')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                      <a class="nav-link" href="#">How It Works</a>
                  </li>
                @if(Route::currentRouteName()=='order-now')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                      <a class="nav-link" href="{{ route('order-now', ['step' => '1']) }}">Order Now</a>
                  </li>
                <!--@if(Route::currentRouteName()=='work-with-us')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                      <a class="nav-link" href="#">Work With Us</a>
                  </li>
                -->
                @if(Route::currentRouteName()=='freelance')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                      <a class="nav-link" href="#">Freelance</a>
                  </li>
                  <!--li class="nav-item">
                      <a class="nav-link" href="#">Testimonials</a>
                  </li-->
                @if(Route::currentRouteName()=='blog')
                  <li class="nav-item active">
                @else
                    <li class="nav-item">
                @endif
                      <a class="nav-link" href="blog">Blog</a>
                  </li>
              </ul>
              <!--ul class="navbar-nav ml-auto social-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <img src="{{ asset('assets/img/iconfinder_facebook_313103.png') }}">
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <img src="{{ asset('assets/img/iconfinder_twitter_313075.png') }}">
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <img src="{{ asset('assets/img/iconfinder_whatsapp_287520.png') }}">
                      </a>
                  </li>
              </ul-->
          </div>
      </div>
  </nav>