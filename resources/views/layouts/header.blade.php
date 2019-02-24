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
              <li><a href="{{ url('/ToPost') }}"><i class="fa fa-bullhorn"></i> Pubblica</li></a>
               @if (Auth::guest())
              <li> <a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> Login</li>
              <li><a href="{{ url('/register') }}"><i class="fa fa-sign-in"></i> Register</li> 
              @else
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
               </form>



    <li class="dropdown user user-menu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">  <span class="hidden-xs">{{ Auth::user()->name }}</span></a>
    <ul class="dropdown-menu"></li>
      <img src="{{ asset('/image/profiles/'.auth()->user()->image)}}" class="img-circle" alt="User Image">
            <li class="user-footer">
            <div class="pull-left"><a href="{{route('UserProfile', Auth::user()->id)}}" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
            <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign out</a>
            </div>
            </li>
            </ul>
            @endif


            
            </div>
          </div>
        </div>
      </div>
    </div>