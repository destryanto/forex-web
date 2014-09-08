<?php
$url = new FunctionController();
?>
@foreach ($noidung as $kt)
@if ($kt != null)
<?php
$urlReal = $url->getURL($kt->loai);
?>
<div>  
    <a href="{{url($urlReal."/threads=".$kt->id)}}">
        @if(file_exists($kt->anhnho))
        {{ HTML::image($kt->anhnho, '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @else
        {{ HTML::image('img/no_thumb.jpg', '', array('class' => 'pull-left', 'style' => 'margin-right: 10px')) }}
        @endif
    </a>
    <p><a href="{{url($urlReal."/threads=".$kt->id)}}">{{HTML::decode($kt->tieude)}}</a></p>
    <p>Thời gian đăng:&nbsp;{{date("h:i A | d/m/Y",strtotime($kt->thoidiemsua))}}</p>
    <p>Lượt xem:&nbsp;{{ $kt->luotxem}}</p>
    <p><a href="{{url($urlReal."/threads=".$kt->id)}}">[...Xem thêm]</a></p>
</div>
<hr>
@endif
@endforeach
<div id='kienthuc_paging'>
    {{$phantrang}}
</div>
<style type='text/css'>
    .pagination li {
        display: inline;
        margin-left: 0.5em;
        margin-right: 0.5em;
    }
</style>
{{ HTML::script('js/jquery-ajax-pagination-1.0.js') }}