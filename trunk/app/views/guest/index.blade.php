@extends('layouts.guest')
@section('main')       
<div class="col-md-12">
    <div class="col-md-9">
        <!--Table economic-->
        <div class="col-md-12" style="padding: 5px">
            <iframe src="http://ec.forexprostools.com?ecoDayBackground=%23ccffff&defaultFont=%232c2640&borderColor=%23660000&ecoDayFontColor=%23000099&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&category=_employment,_economicActivity,_inflation,_credit,_centralBanks,_confidenceIndex,_balance,_Bonds&importance=1,2,3&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,48,10,35,7,43,60,36,110,11,26,12,4,5&calType=day&timeZone=8&lang=1" 
                    width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0">
            </iframe>
            <!--                        
            <div class="poweredBy">
                                    <span style="font-size: 11px;color: #333333;text-decoration: none;">
                                        Real Time Economic Calendar provided by 
                                        <a href="http://www.Investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">
                                            Investing.com
                                        </a>.
                                    </span>
                                </div>
            -->
        </div>
        <!--Tầm nhìn thế giới-->
        <div class="col-md-12" style="margin-top: 15px;">
            <!--  -->
            <div class="row">
                <div class="col-md-12 panel panel-primary">
                    <h3>{{$chienLuoc->tieude}}</h3>
                    <p>{{$chienLuoc->noidung}}</p>
                </div>
            </div>
        </div>
        <!--Chiến lược vàng-->
        <div class="col-md-12" style="margin-top: 15px;">
            <!--  -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">CHIẾN LƯỢC FOREX</div>
                    <div class="panel-body" id="forex_index">
                        @include ('guest.forex.index')
                    </div>
                </div>
            </div>
        </div>
        <!--Chiến lược forex-->
        <div class="col-md-12" style="margin-top: 15px">
            <!-- show news -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">CHIẾN LƯỢC VÀNG</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <!--  -->
                            <div class="row">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#kinhnghiemgd" role="tab" data-toggle="tab">Kinh nghiệm giao dịch</a></li>
                                    <li><a href="#phantichfa" role="tab" data-toggle="tab">Phân tích cơ bản - FA</a></li>
                                    <li><a href="#phantichta" role="tab" data-toggle="tab">Phân tích kỹ thuật - TA</a></li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content" style="padding: 5px">
                                    <div class="tab-pane active" id="kinhnghiemgd">
                                        <div id="kinhnghiemgd_content">
                                            @include ('guest.chienluocvang.index_kn')
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="phantichfa">
                                        <div id="phantichfa_content">
                                            @include ('guest.chienluocvang.index_fa')
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="phantichta">
                                        <div id="phantichta_content">
                                            @include ('guest.chienluocvang.index_ta')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="col-md-12"  style="margin-top:15px;">
            <a class="btn btn-primary btn-function" href="https://www.ironfx.com/vi/register?utm_source=16014148&utm_medium=ib_link&utm_campaign=IB" 
               title="Mở tài khoản thật"><span class="glyphicon glyphicon-user"></span>&nbsp;Mở tài khoản thật</a>
        </div> 
        <div class="col-md-12"  style="margin-top: 15px">
            <a class="btn btn-success btn-function" href="https://www.ironfx.com/en/demo" 
               title="Mở tài khoản Demo"><span class="glyphicon glyphicon-user"></span>&nbsp;Mở tài khoản Demo</a>
        </div>
        <div class="col-md-12"  style="margin-top: 15px">
            <a class="btn btn-warning btn-function" href="http://www.ironfx.com/en/trading-platform/mt4-trader-advanced" 
               title="Tải phần mềm MT4"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;Tải phần mềm MT4</a>
        </div>
        <!-- find us on facebook -->
        <div class="col-md-12" style="margin-top: 25px">
            <div class="facebook">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2Fforexmarketcomvn%2F695512290504029&amp;width=200&amp;height=290&amp;colorscheme=dark&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:290px;" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>    
@stop