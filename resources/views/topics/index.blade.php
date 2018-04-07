
@extends('layouts.app')
@section('title', isset($category) ? $category->name : '話題列表')
@section('content')
<div class="row">
  <div class="col-lg-9 col-md-9 topic-list">@if (isset($category))
    <div role="alert" class="alert alert-info">{{ $category->name }}：{{ $category->description }}</div>@endif
    <div class="panel panel-default">
      <div class="panel-heading">
        <ul class="nav nav-pills">
          <li class="{{ active_class( ! if_query('order', 'recent') ) }}"><a href="{{ Request::url() }}?order=default">最後回覆</a></li>
          <li class="{{ active_class(if_query('order', 'recent')) }}"><a href="{{ Request::url() }}?order=recent">最新發佈</a></li>
        </ul>
      </div>
      <div class="panel-body">
        {{-- 話題列表 --}}
        @include('topics._topic_list', ['topics' => $topics])
        {{-- 分頁 --}}
        {!! $topics->render() !!}
      </div>
    </div>
  </div>
  <div style="background-color: #fff;box-shadow: 0 1px 11px 2px rgba(42, 42, 42, 0.1);margin-bottom: 40px;margin-top: 0;" class="col-lg-3 col-md-3 sidebar">@include('topics._sidebar')</div>
</div>@endsection
