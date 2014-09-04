<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="topmenubar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>&nbsp;Trang chủ</a>
                </li>

                <li class="dropdown">
                    <a href="{{ url('news') }}"><span class="glyphicon glyphicon-list"></span>&nbsp;Tin tức</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-barcode"></span>&nbsp;Giao dịch <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                        <li class="dropdown-submenu"><a href="{{ url('chienluoc') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Chiến lược giao dịch </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="{{ url('chienluoc/vang') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Chiến lược vàng</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('chienluoc/vang_klq') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Kim loại quý</a></li>
                                        <li><a href="{{ url('chienluoc/vang_hh') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Hàng hóa</a></li>
                                        <li><a href="{{ url('chienluoc/vang_cp') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Cổ phiếu</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('chienluoc/forex') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Chiến lược Forex</a></li>
                            </ul>
                        </li>                      
                        <li class="divider"></li>
                        <li><a href="{{ url('sanpham') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Sản phẩm giao dịch </a></li>   
                        <li><a href="{{ url('kinhnghiem') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Kinh nghiệm giao dịch </a></li> 
                        <li><a href="{{ url('kienthuc') }}"><span class="glyphicon glyphicon-arrow-right"></span>&nbsp;Kiến thức giao dịch </a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="{{ url('sangd') }}"><span class="glyphicon glyphicon-flag"></span>&nbsp;Sàn giao dịch </a>
                </li>

                <li class="dropdown">
                    <a href="{{ url('contact') }}"><span class="glyphicon glyphicon-phone"></span>&nbsp;Liên hệ </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="{{ url('login') }}"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Đăng nhập </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<style type="text/css">.dropdown-submenu {
    position:relative;
}
.dropdown-submenu>.dropdown-menu {
    top:0;
    left:100%;
    margin-top:-6px;
    margin-left:-1px;
    -webkit-border-radius:0 6px 6px 6px;
    -moz-border-radius:0 6px 6px 6px;
    border-radius:0 6px 6px 6px;
}
.dropdown-submenu:hover>.dropdown-menu {
    display:block;
}
.dropdown-submenu>a:after {
    display:block;
    content:" ";
    float:right;
    width:0;
    height:0;
    border-color:transparent;
    border-style:solid;
    border-width:5px 0 5px 5px;
    border-left-color:#cccccc;
    margin-top:5px;
    margin-right:-10px;
}
.dropdown-submenu:hover>a:after {
    border-left-color:#ffffff;
}
.dropdown-submenu.pull-left {
    float:none;
}
.dropdown-submenu.pull-left>.dropdown-menu {
    left:-100%;
    margin-left:10px;
    -webkit-border-radius:6px 0 6px 6px;
    -moz-border-radius:6px 0 6px 6px;
    border-radius:6px 0 6px 6px;
}
</style>