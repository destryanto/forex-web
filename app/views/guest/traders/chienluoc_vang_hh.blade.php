@extends('layouts.guest')
@section('main')
<div class="col-md-12 news" style="margin-top: 15px">
    <div class="col-md-8">
        <div class="panel panel-success">
            <div class="panel-heading"><h3><span class="glyphicon glyphicon-star"></span>&nbsp;Hàng Hóa</h3></div>
            <div class="panel-body" id="hanghoa_content">
                @include ('guest.chienluoc.chienluocvang.index_hh')
            </div>
        </div>
    </div>
    <div class="col-md-4">
        @include('guest.relations.index_views')
    </div>
</div>
@stop