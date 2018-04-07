@if (count($replies))
<ul class="list-group">@foreach ($replies as $reply)
  <li class="list-group-item"><a href="{{ $reply-&gt;topic-&gt;link(['#reply' . $reply-&gt;id]) }}">{{ $reply->topic->title }}</a>
    <div style="margin: 6px 0;" class="reply-content">{!! $reply->content !!}</div>
    <div class="meta"><span aria-hidden="true" class="glyphicon glyphicon-time"></span> 回復於 {{ $reply->created_at->diffForHumans() }}</div>
  </li>@endforeach
</ul>@else
<div class="empty-block">暫無數據 ~_~ </div>@endif
{{-- 分頁 --}}
{!! $replies->appends(Request::except('page'))->render() !!}