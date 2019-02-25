
  <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
            aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
          <div class="search-link-mobile">
                <a href="javascript:void(0);">
                  <i class="fa fa-search"></i>
                </a>
                <div class="search-form">
                  <form action='#' method='get'>
                    <input type='hidden' name='form-name' value='form 1' />
                    <div class="form-group has-feedback">
                      <input type="text" class="form-control" placeholder="Search">
                      <i class="fa fa-search"></i>
                    </div>
                    <button type="submit" class="btn btn-primary">search</button>
                  </form>
                </div>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">

    </div>
  </div>
</nav>

<nav class="navbar-mobile">
      <div class="logo-wrapper">
        <a href="#" class="close-mobile">
          <i class="fa fa-close"></i>
        </a>
      </div>
      <ul class="mobile-menu"> 
        </ul>
</nav>
<div class="navbar-mobile-show">
      <a href="#">
        <i class="fa fa-bars"></i>
      </a>
</div>
</div>


  <section class="portfolio">
    <div class="container">
      <div class="row visible-xs visible-sm">
        <img src="{{ asset('/image/publications/white.png')}}" class="img-responsive">
        <div classs="clearfix"></div>
        <div class="menumobile">
          <ul class="site-infos text-center">
            <li>
              <a href="{{ url('/ToPost') }}">
                <i class="fa fa-bullhorn"></i> To Post</a></li>
            </a>
             @if (Auth::guest())
              <li> <a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Login</a></li>
             </ul>
              @else

              
              <li>
              <a href="{{ route('PublicationsShoppingCart') }}">
                <i class="fa fa-cart-plus"></i> Shopping Cart</a></li>

              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

            

            </ul>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
               </form>
              @endif
          
        </div>
      </div>