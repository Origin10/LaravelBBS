
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Collapsed Hamburger-->
      <button type="button" data-toggle="collapse" data-target="#app-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <!-- Branding Image--><a href="{{ url('/') }}" class="navbar-brand">LaraBBS</a>
    </div>
    <div id="app-navbar-collapse" class="collapse navbar-collapse">
      <!-- Left Side Of Navbar-->
      <ul class="nav navbar-nav"></ul>
      <!-- Right Side Of Navbar-->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links-->@guest
        <li><a href="{{ route('login') }}">登入</a></li>
        <li><a href="{{ route('register') }}">註冊</a></li>@else
        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span style="margin-right:8px; margin-top:-5px;" class="user-avatar pull-left"><img src="{{ Auth::user()->avatar }}" width="30px" height="30px" class="img-responsive img-circle"/></span>{{ Auth::user()->name }} <span class="caret"></span></a>
          <ul role="menu" class="dropdown-menu">
            <li><a href="{{ route('users.edit', Auth::id()) }}">編輯資料</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();              document.getElementById('logout-form').submit();">登出</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
          </ul>
        </li>@endguest
      </ul>
    </div>
  </div>
</nav>