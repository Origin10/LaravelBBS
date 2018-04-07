
<div class="reply-list">@foreach ($replies as $index => $reply)
  <div name="reply{{ $reply->id }}" id="reply{{ $reply->id }}" class="media">
    <div class="avatar pull-left"><a href="{{ route('users.show', [$reply->user_id]) }}"><img alt="{{ $reply->user->name }}" src="{{ $reply->user->avatar }}" style="width:48px;height:48px;" class="media-object img-thumbnail"/></a></div>
    <div class="infos">
      <div class="media-heading"><a href="{{ route('users.show', [$reply->user_id]) }}" title="{{ $reply->user->name }}">{{ $reply->user->name }}</a><span> •  </span><span title="{{ $reply->created_at }}" class="meta">{{ $reply->created_at->diffForHumans() }}</span>{{-- 回復刪除按鈕 --}}<span class="meta pull-right"><a title="删除回复"><span aria-hidden="true" class="glyphicon glyphicon-trash"></span></a></span></div>
      <div class="reply-content">{!! $reply->content !!}</div>
    </div>
  </div>
  <hr/>@endforeach
</div>