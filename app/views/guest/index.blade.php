@extends('layouts.guest')
@section('main')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-1 content-left"></div>
        <div class="col-md-10 content-middle" style="background: #F0F0F0 ">
            <div class="col-md-12">
                <div class="col-md-9">
                    <div class="col-md-12">
                        <iframe src="http://ec.forexprostools.com?ecoDayBackground=%23ccffff&defaultFont=%232c2640&borderColor=%23660000&ecoDayFontColor=%23000099&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&category=_employment,_economicActivity,_inflation,_credit,_centralBanks,_confidenceIndex,_balance,_Bonds&importance=1,2,3&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,48,10,35,7,43,60,36,110,11,26,12,4,5&calType=day&timeZone=8&lang=1" 
                                width="600" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0">
                        </iframe>
                        <div class="poweredBy">
                            <span style="font-size: 11px;color: #333333;text-decoration: none;">
                                Real Time Economic Calendar provided by 
                                <a href="http://www.Investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">
                                    Investing.com
                                </a>.
                            </span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!--  -->
                        <div class="row" style="margin-top: 50px; margin-left: 2px; margin-right: 2px;">
                            <div class="col-md-12 panel panel-primary">
                                <h3>{{Hethong::getTencty()}}</h3>
                                <p>{{Hethong::getInfocty()}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- show news -->
                        <div class="row" style="margin-top: 30px">
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">CHIẾN LƯỢC VÀNG</div>
                                    <div class="panel-body">
                                      Chưa có dữ liệu.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-success">
                                <div class="panel-heading">CHIẾN LƯỢC FOREX</div>
                                    <div class="panel-body">
                                      Chưa có dữ liệu.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <!--  -->
                            <div class="row">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                  <li class="active"><a href="#home" role="tab" data-toggle="tab">Kinh nghiệm giao dịch</a></li>
                                  <li><a href="#profile" role="tab" data-toggle="tab">Phân tích cơ bản - FA</a></li>
                                  <li><a href="#messages" role="tab" data-toggle="tab">Phân tích kỹ thuật - TA</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div class="tab-pane active" id="home">...</div>
                                  <div class="tab-pane" id="profile">...</div>
                                  <div class="tab-pane" id="messages">...</div>
                                  <div class="tab-pane" id="settings">...</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="col-md-10"  style="margin-top:60px">
                         <a class="btn btn-primary btn-function" href="https://www.ironfx.com/vi/register?utm_source=16014148&utm_medium=ib_link&utm_campaign=IB" 
                            title="Mở tài khoản thật"> Mở tài khoản thật</a>
                    </div> 
                    <div class="col-md-10"  style="margin-top: 15px">
                         <a class="btn btn-success btn-function" href="https://www.ironfx.com/en/demo" 
                            title="Mở tài khoản Demo"> Mở tài khoản Demo</a>
                    </div>
                    <div class="col-md-10"  style="margin-top: 15px">
                         <a class="btn btn-warning btn-function" href="http://www.ironfx.com/en/trading-platform/mt4-trader-advanced" 
                           title="Tải phần mềm MT4"><span class="glyphicon glyphicon-download-alt"></span> Tải phần mềm MT4</a>
                    </div>
                    <!-- find us on facebook -->
                    <div class="col-md-10"  style="margin-top: 265px">
                        <div class="facebook">
                            <div class="panel panel-success">
                            <div class="panel-heading">Find us on Face book.</div>
                                <div class="panel-body">
                                    <a href="https://www.facebook.com/syluong282">
                                        <img src="{{asset('/img/face.png')}}" alt="face book" height="32px" width="32px"/>&nbsp;
                                        Forex Trader
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- all contact -->
            @include('guest.footer.index')
        </div>
        <div class="col-md-1 content-right"></div>  
    </div>
</div>
@stop