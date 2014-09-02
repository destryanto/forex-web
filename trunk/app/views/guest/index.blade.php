@extends('layouts.guest')
@section('main')
<div class="col-md-12">
    <div class="col-md-9">
        <!--Table economic-->
        <div class="col-md-12" style="padding: 5px">
            <iframe src="http://ec.forexprostools.com?ecoDayBackground=%23ccffff&defaultFont=%232c2640&borderColor=%23660000&ecoDayFontColor=%23000099&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&category=_employment,_economicActivity,_inflation,_credit,_centralBanks,_confidenceIndex,_balance,_Bonds&importance=1,2,3&features=datepicker,timezone&countries=25,32,6,37,72,22,17,39,14,48,10,35,7,43,60,36,110,11,26,12,4,5&calType=day&timeZone=8&lang=1" 
                    width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0">
            </iframe>
            <!--                        <div class="poweredBy">
                                        <span style="font-size: 11px;color: #333333;text-decoration: none;">
                                            Real Time Economic Calendar provided by 
                                            <a href="http://www.Investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">
                                                Investing.com
                                            </a>.
                                        </span>
                                    </div>-->
        </div>
        <!--Tầm nhìn thế giới-->
        <div class="col-md-12" style="margin-top: 15px;">
            <!--  -->
            <div class="row">
                <div class="col-md-12 panel panel-primary">
                    <h3>{{Hethong::getTencty()}}</h3>
                    <p>{{Hethong::getInfocty()}}</p>
                </div>
            </div>
        </div>
        <!--Chiến lược vàng-->
        <div class="col-md-12" style="margin-top: 15px;">
            <!--  -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">CHIẾN LƯỢC VÀNG</div>
                    <div class="panel-body">
                        (ảnh)Chiến lược vàng 1 << xem >>        |    (ảnh)Chiến lược vàng 2 << xem >><br/>
                        <br/>
                        (ảnh)Chiến lược vàng 3 << xem >>        |    (ảnh)Chiến lược vàng 4 << xem >><br/>
                        <br/>Phân trang <<1 2 3>>
                    </div>
                </div>
            </div>
        </div>
        <!--Chiến lược forex-->
        <div class="col-md-12" style="margin-top: 15px">
            <!-- show news -->
            <div class="row">
                <div class="panel panel-success">
                    <div class="panel-heading">CHIẾN LƯỢC FOREX</div>
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
                                        (ảnh) Các bài về kinh nghiệm giao dịch  1 << xem >>        |    (ảnh) Các bài về kinh nghiệm giao dịch 2 << xem >><br/>
                                        <br/>
                                        (ảnh) Các bài về kinh nghiệm giao dịch 3  << xem >>        |    (ảnh) Các bài về kinh nghiệm giao dịch 4 << xem >><br/>
                                        <br/>Phân trang <<1 2 3>>
                                    </div>
                                    <div class="tab-pane" id="phantichfa">
                                         (ảnh)  Các bài về phân tích cơ bản FA  1 << xem >>        |    (ảnh)  Các bài về phân tích cơ bản FA 2 << xem >><br/>
                                        <br/>
                                        (ảnh)  Các bài về phân tích cơ bản FA 3  << xem >>        |    (ảnh)  Các bài về phân tích cơ bản FA 4 << xem >><br/>
                                        <br/>Phân trang <<1 2 3>>
                                    </div>
                                    <div class="tab-pane" id="phantichta">
                                         (ảnh) Các bài về phân tích kỹ thuật TA  1 << xem >>        |    (ảnh)  Các bài về phân tích kỹ thuật TA 2 << xem >><br/>
                                        <br/>
                                        (ảnh)  Các bài về phân tích kỹ thuật TA 3  << xem >>        |    (ảnh)  Các bài về phân tích kỹ thuật TA 4 << xem >><br/>
                                        <br/>Phân trang <<1 2 3>>
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
        <div class="col-md-12" style="margin-top: 15px">
            <div class="facebook">
                <div class="fb-like-box" data-href="https://www.facebook.com/ngogiangthanhblog" data-width="200px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
            </div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=406997906044195&version=v2.0";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
        </div>
    </div>
</div>    
@stop