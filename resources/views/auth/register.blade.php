
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">用戶註冊</div>
        <div class="panel-body">
          <form method="POST" action="{{ route('register') }}" class="form-horizontal">{{ csrf_field() }}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">用戶名</label>
              <div class="col-md-6">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required="" autofocus="" class="form-control"/>@if ($errors->has('name'))<span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">E-Mail 地址</label>
              <div class="col-md-6">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required="" class="form-control"/>@if($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">密碼</label>
              <div class="col-md-6">
                <input id="password" type="password" name="password" required="" class="form-control"/>@if($errors->has('password'))<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group">
              <label for="password-confirm" class="col-md-4 control-label">重复密码</label>
              <div class="col-md-6">
                <input id="password-confirm" type="password" name="password_confirmation" required="" class="form-control"/>
              </div>
            </div>
            <div class="form-group {{ $errors->has('captcha') ? ' has-error' : '' }}">
              <label for="captcha" class="col-md-4 control-label">驗證碼</label>
              <div class="col-md-6">
                <input id="captcha" name="captcha" class="form-control"/><img src="{{ captcha_src('flat') }}" onclick="this.src='/captcha/flat?'+Math.random()" title="点击图片重新获取验证码" class="thumbnail captcha"/>@if ($errors->has('captcha'))<span class="help-block"><strong>{{ $errors->first('captcha') }}</strong></span>@endif
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">註冊<i class="glyphicon glyphicon-arrow-right"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>@endsection