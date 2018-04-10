
@extends('layouts.app')
@section('title', $user->name . ' 的個人中心')
@section('content')
<div class="row">
  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="media">
          <div align="center"><img src="{{ $user->avatar }}" width="300px" height="300px" class="thumbnail img-responsive"/></div>
          <div class="media-body">
            <hr/>
            <h4><strong>個人簡介</strong></h4>
            <p>{{ $user->introduction }} </p>
            <hr/>
            <h4><strong>註冊於</strong></h4>
            <p>{{ $user->created_at->diffForHumans() }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-body"><span>
          <h1 style="font-size:30px;" class="panel-title pull-left">{{ $user->name }} <small>{{ $user->email }}</small></h1></span></div>
    </div>
    <hr/>{{-- 用戶發布的內容 --}}
    <div class="panel panel-default">
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#">Ta 的話題</a></li>
          <li><a href="#">Ta 的回覆</a></li>
        </ul>@include('users._topics', ['topics' => $user->topics()->recent()->paginate(5)])
      </div>
    </div>
  </div>
</div>@stop