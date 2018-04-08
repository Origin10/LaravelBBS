@extends('errors::layout')

@section('title', '頁面過期')

@section('message')

頁面有效期限已過期。
<br/><br/>

<form id="form1" runat="server">
    <div id='div1'></div>
    <span>秒後自動重新整理或者點擊&nbsp;</span>
    <a href="#" onclick="javascript:window.location.reload()">重新整理</a>
</form>


<script type="text/javascript">

//設定倒數秒數
var t = 5;

//顯示倒數秒收
function showTime()
{
    t -= 1;
    document.getElementById('div1').innerHTML= t;

    if(t==0)
    {
      window.location.reload();
    }

    //每秒執行一次,showTime()
    setTimeout("showTime()",1000);
}

//執行showTime()
showTime();
</script>

@stop
