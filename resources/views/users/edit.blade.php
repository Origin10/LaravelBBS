
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="panel panel-default col-md-10 col-md-offset-1">
    <div class="panel-heading">
      <h4><i class="glyphicon glyphicon-edit">編輯個人資訊</i></h4>
    </div>@include('common.error')
    <div class="panel-body">
      <form action="{{ route('users.update', $user->id) }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT"/>
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div class="form-group">
          <label for="name-field">用戶名</label>
          <input id="name-field" type="text" name="name" value="{{ old('name', $user->name ) }}" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="email-field">信箱</label>
          <input id="email-field" type="text" name="email" value="{{ old('email', $user->email ) }}" class="form-control"/>
        </div>
        <div class="form-group">
          <label for="introduction-field">個人簡介</label>
          <textarea id="introduction-field" name="introduction" rows="3" class="form-control">{{ old('introduction', $user->introduction ) }}</textarea>
        </div>
        <div class="form-group">
          <label for="" class="avatar-label">用戶頭像</label>
          <input type="file" name="avatar"/>@if($user->avatar)<br/><img src="{{ $user->avatar }}" width="200" class="thumbnail img-responsive"/>@endif
        </div>
        <div class="well well-sm">
          <button type="submit" class="btn btn-primary">保存</button>
        </div>
      </form>
    </div>
  </div>
</div>@endsection