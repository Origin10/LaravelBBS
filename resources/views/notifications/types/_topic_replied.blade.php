
<div class="media">
  <div class="avatar pull-left"><a href="{{ route('users.show', $notification->data['user_id']) }}"><img alt="{{ $notification->data['user_name'] }}" src="{{ $notification->data['user_avatar'] }}" style="width:48px;height:48px;" class="media-object img-thumbnail"/></a></div>
  <div class="infos">
    <div class="media-heading"><a href="{{ route('users.show', $notification->data['user_id']) }}">{{ $notification->data['user_name'] }}</a>評論了<a href="{{ $notification->data['topic_link'] }}">{{ $notification->data['topic_title'] }}</a>{{-- 回覆刪除按鈕 --}}<span title="{{ $notification->created_at }}" class="meta pull-right"><span aria-hidden="true" class="glyphicon glyphicon-clock"></span>{{ $notification->created_at->diffForHumans() }}</span></div>
    <div class="reply-content">{!! $notification->data['reply_content'] !!}</div>
  </div>
</div>
<hr/>