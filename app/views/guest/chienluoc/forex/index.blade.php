<?php
$url = new FunctionController();
?>
@foreach ($forex as $fr)
@if ($fr != null)
<?php
$urlReal = $url->getURL($fr->loai);
?>
<div>
    <a href="{{url($urlReal."/".$fr->id)}}">
        @if(File::exists($fr->anhnho))
        {{ HTML::image($fr->anhnho, '', array('class' => 'pull-left', 'style' => 'width:96px;margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><h4><a href="{{url($urlReal."/".$fr->id)}}">{{ $fr->tieude }}</a></h4></p>
    <p><span class="glyphicon glyphicon-time"></span>&nbsp;{{date("h:i A | d/m/Y",strtotime($fr->thoidiemdang))}}</p>
    <p><span class="glyphicon glyphicon-search"></span>&nbsp;Lượt xem:&nbsp;{{ $fr->luotxem}}</p>
    <p><a href="{{url($urlReal."/".$fr->id)}}"><span class="glyphicon glyphicon-play"></span>&nbsp;Xem thêm</a></p>
</div>
<hr>
@endif
@endforeach
<div id='forex_paging'>
    {{$forex->links()}} 
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>