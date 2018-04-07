@if (count($topics))
<ul class="media-list">@foreach ($topics as $topic)
  <li class="media">
    <div class="media-left"><a href="{{ route('users.show', [$topic->user_id]) }}"><img style="width: 52px; height: 52px;" src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}" class="media-object img-thumbnail"/></a></div>
    <div class="media-body">
      <div class="media-heading"><a href="{{ $topic->link() }}" title="{{ $topic->title }}">{{ $topic->title }}</a><a href="{{ route('topics.show', [$topic->id]) }}" class="pull-right"><span class="badge"> {{ $topic->reply_count }} </span></a></div>
      <div class="media-body meta"><a href="{{ route('categories.show', $topic->category->id) }}" title="{{ $topic->category->name }}"><span aria-hidden="true" class="glyphicon glyphicon-folder-open"></span>{{ $topic->category->name }}</a><span> • </span><a href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}"><span aria-hidden="true" class="glyphicon glyphicon-user">{{ $topic->user->name }}</span></a><span> • </span><span aria-hidden="true" class="glyphicon glyphicon-time"></span><span title="最後活躍於" class="timeago">{{ $topic->updated_at->diffForHumans() }}</span></div>
    </div>
  </li>@if ( ! $loop->last)
  <hr/>@endif
  @endforeach
</ul>@else
<div class="empty-block">戰無數據 ~_~ </div>@endif
