
@extends('layouts.app')
@section('title', '無法訪問')
@section('content')
<div class="col-md-4 col-md-offset-4">
  <div class="panel panel-default">
    <div class="panel-body">@if (Auth::check())
      <div class="alert alert-danger text-center">無法訪問</div>@else
      <div class="alert alert-danger text-center">請登入後繼續操作。</div><a href="{{ route('login') }}" class="btn btn-lg btn-primary btn-block"><span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>登入</a>@endif
    </div>
  </div>
</div>@stop