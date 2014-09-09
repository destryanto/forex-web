<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            <a href="{{ url('admin') }}"><i class="glyphicon glyphicon-th-large"></i>&nbsp;Quản lý</a>
            <b class="glyphicon glyphicon-plus-sign visible-xs pull-right"></b>
        </h3>
    </div>
    <div class="list-group hidden-xs">
        <a href="{{ url('/') }}" class="list-group-item" target="_blank"><i class="glyphicon glyphicon-th-list"></i>&nbsp;Trang chủ</a>
        <a href="{{ url('admin/ql=baiviet') }}" class="list-group-item"><i class="glyphicon glyphicon-list-alt"></i>&nbsp;Quản lý bài viết</a>
        <a href="{{ url('admin/ql=lienhe') }}" class="list-group-item"><i class="glyphicon glyphicon-phone-alt"></i>&nbsp;Quản lý các liên hệ</a>
        <a href="{{ url('admin/ql=lienlac') }}" class="list-group-item"><i class="glyphicon glyphicon-phone"></i>&nbsp;Quản lý địa chỉ liên lạc</a>
        <a href="{{ url('admin/ql=doimatkhau') }}" class="list-group-item"><i class="glyphicon glyphicon-user"></i>&nbsp;Đổi mật khẩu</a>
    </div>
</div>