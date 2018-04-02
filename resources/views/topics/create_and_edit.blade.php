
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
        <h2 class="text-center"><i class="glyphicon glyphicon-edit"></i>@if($topic->id)
          編輯話題
          @else
          新建話題
          @endif
        </h2>
        <hr/>@include('common.error')
        @if($topic->id)
        <form action="{{ route('topics.update', $topic->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT"/>
        </form>@else
        <form action="{{ route('topics.store') }}" method="POST" accept-charset="UTF-8">@endif
          <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
          <div class="form-group">
            <input type="text" name="title" value="{{ old('title', $topic->title ) }}" placeholder="請填寫標題" required="" class="form-control"/>
          </div>
          <div class="form-group">
            <select name="category_id" required="" class="form-control">
              <option value="" hidden="" disabled="" selected="">請選擇分類</option>@foreach ($categories as $value)
              <option value="{{ $value->id }}">{{ $value->name }}</option>@endforeach
            </select>
          </div>
          <div class="form-group">
            <textarea id="editor" name="body" rows="3" placeholder="請填入至少三字符的內容。" required="" class="form-control">{{ old('body', $topic->body ) }}</textarea>
          </div>
          <div class="well well-sm">
            <button type="submit" class="btn btn-primary"><span aria-hidden="true" class="glyphicon glyphicon-ok"></span> 保存</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>@endsection
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/simditor.css') }}">
@stop

@section('scripts')
    <script type="text/javascript"  src="{{ asset('js/module.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/hotkeys.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/uploader.js') }}"></script>
    <script type="text/javascript"  src="{{ asset('js/simditor.js') }}"></script>

    <script>
    $(document).ready(function(){
        var editor = new Simditor({
            textarea: $('#editor'),
        });
    });
    </script>

@stop
