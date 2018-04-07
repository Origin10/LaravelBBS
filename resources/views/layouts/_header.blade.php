
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Collapsed Hamburger-->
      <button type="button" data-toggle="collapse" data-target="#app-navbar-collapse" class="navbar-toggle collapsed"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <!-- Branding Image--><a href="{{ url('/') }}" class="navbar-brand">LaraBBS</a>
    </div>
    <div id="app-navbar-collapse" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{ active_class(if_route('topics.index')) }}"><a href="{{ route('topics.index') }}">話題</a></li>
        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 1))) }}"><a href="{{ route('categories.show', 1) }}">分享</a></li>
        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 2))) }}"><a href="{{ route('categories.show', 2) }}">教學</a></li>
        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 3))) }}"><a href="{{ route('categories.show', 3) }}">問答</a></li>
        <li class="{{ active_class((if_route('categories.show') && if_route_param('category', 4))) }}"><a href="{{ route('categories.show', 4) }}">公告</a></li>
      </ul>
      <!-- Left Side Of Navbar-->
      <ul class="nav navbar-nav"></ul>
      <!-- Right Side Of Navbar-->
      <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links-->@guest
        <li><a href="{{ route('login') }}">登入</a></li>
        <li><a href="{{ route('register') }}">註冊</a></li>@else
        <li><a href="{{ route('topics.create') }}"><span aria-hidden="true" class="glyphicon glyphicon-plus"></span></a></li>{{-- 消息通知标记 --}}
        <li><a href="{{ route('notifications.index') }}" style="margin-top: -2px;" class="notifications-badge"><span title="消息提醒" class="badge badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'fade' }}">{{ Auth::user()->notification_count }}</span></a></li>
        <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><span class="user-avatar pull-left"><img src="{{ Auth::user()->avatar }}" width="30px" height="30px" class="img-responsive img-circle"/></span>&nbsp; {{ Auth::user()->name }} <span class="caret"></span></a>
          <ul role="menu" class="dropdown-menu">
            <li><a href="{{ route('users.show', Auth::id()) }}"> <span aria-hidden="true" class="glyphicon glyphicon-user">&nbsp;個人中心</span></a></li>
            <li><a href="{{ route('users.edit', Auth::id()) }}"> <span aria-hidden="true" class="glyphicon glyphicon-edit">&nbsp;編輯資料</span></a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();                document.getElementById('logout-form').submit();"><span aria-hidden="true" class="glyphicon glyphicon-log-out">&nbsp;退出登入</span></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </li>
          </ul>@endguest
        </li>
      </ul>
    </div>
  </div>
</nav>