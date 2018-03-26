
@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1><i class="glyphicon glyphicon-edit"></i>Topic /
          @if($topic->id)
          Edit #
          {{$topic->id}}@else
          Create
          @endif
        </h1>
      </div>@include('common.error')
      <div class="panel-body">@if($topic->id)
        <form action="{{ route('topics.update', $topic->id) }}" method="POST" accept-charset="UTF-8">
          <input type="hidden" name="_method" value="PUT"/>@else
          <form action="{{ route('topics.store') }}" method="POST" accept-charset="UTF-8">@endif
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group">
              <label for="title-field">Title</label>
              <input id="title-field" type="text" name="title" value="{{ old('title', $topic-&gt;title ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="body-field">Body</label>
              <textarea id="body-field" name="body" rows="3" class="form-control">{{ old('body', $topic->body ) }}</textarea>
            </div>
            <div class="form-group">
              <label for="user_id-field">User_id</label>
              <input id="user_id-field" type="text" name="user_id" value="{{ old('user_id', $topic->user_id ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="category_id-field">Category_id</label>
              <input id="category_id-field" type="text" name="category_id" value="{{ old('category_id', $topic->category_id ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="reply_count-field">Reply_count</label>
              <input id="reply_count-field" type="text" name="reply_count" value="{{ old('reply_count', $topic-&gt;reply_count ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="view_count-field">View_count</label>
              <input id="view_count-field" type="text" name="view_count" value="{{ old('view_count', $topic-&gt;view_count ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="last_reply_user_id-field">Last_reply_user_id</label>
              <input id="last_reply_user_id-field" type="text" name="last_reply_user_id" value="{{ old('last_reply_user_id', $topic-&gt;last_reply_user_id ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="order-field">Order</label>
              <input id="order-field" type="text" name="order" value="{{ old('order', $topic->order ) }}" class="form-control"/>
            </div>
            <div class="form-group">
              <label for="excerpt-field">Excerpt</label>
              <textarea id="excerpt-field" name="excerpt" rows="3" class="form-control">{{ old('excerpt', $topic->excerpt ) }}</textarea>
            </div>
            <div class="form-group">
              <label for="slug-field">Slug</label>
              <input id="slug-field" type="text" name="slug" value="{{ old('slug', $topic->slug ) }}" class="form-control"/>
            </div>
            <div class="well well-sm">
              <button type="submit" class="btn btn-primary">Save</button><a href="{{ route('topics.index') }}" class="btn btn-link pull-right"><i class="glyphicon glyphicon-backward"></i>Back</a>
            </div>
          </form>
        </form>
      </div>
    </div>
  </div>
</div>@endsection