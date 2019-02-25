 <div class="header">
    <div class="top-bar">
      <div class="container">
        <div class="row">

                      <div class="col-sm-2 text-center">
                        <ul class="social-media">
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        </ul>
                      </div>

                <div class="col-sm-4"></div>

                      <div class="col-sm-6">
                          <ul class="site-infos text-right">
                            <li><a href="{{ url('/ToPost') }}"><i class="fa fa-bullhorn"></i> To post </a> </li>
                            @if (Auth::guest())
                                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-in">   </i> Login   </li>
                                        <li><a href="{{ url('/register') }}"><i class="fa fa-sign-in"></i> Register</li> 
                            @else
                                        <li><a href="{{ route('PublicationsShoppingCart') }}"><i class="fa fa-cart-plus"></i> Shopping Cart</a></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                              
                                         <li><a href="{{route('UserProfile', Auth::user()->id)}}">  <span class="hidden-xs">{{ Auth::user()->name }}</span></a></li>
                          @endif
                          </ul>
                      </div>



          </div>
        </div>
      </div>
    </div>