<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-new-window"></i>&nbsp;Thêm liên lạc</div>
    <div class="panel-body">
        <form id="lienhe_form" class="form-horizontal" method="post" action="{{url('admin/add=lienlac')}}" enctype="multipart/form-data" role="form">
            <div class="form-group">
                <label for="tenbophan" class="col-sm-3 control-label">Tên bộ phận:</label>
                <div class="col-sm-9">
                    <input name="tenbophan" type="text" class="form-control" id="tenbophan" value="" placeholder="Nhập tên bộ phận" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="sodienthoai" class="col-sm-3 control-label">Điện thoại:</label>
                <div class="col-sm-9">
                    <input name="sodienthoai" type="text" class="form-control" id="sodienthoai" value="" placeholder="Nhập số điện thoại" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="sofax" class="col-sm-3 control-label">Fax:</label>
                <div class="col-sm-9">
                    <input name="sofax" type="text" class="form-control" id="sofax" value="" placeholder="Nhập số Fax" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email:</label>
                <div class="col-sm-9">
                    <input name="email" type="email" class="form-control" id="email" value="" placeholder="Nhập email" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="facebook" class="col-sm-3 control-label">Facebook:</label>
                <div class="col-sm-9">
                    <input name="facebook" type="text" class="form-control" id="facebook" value="" placeholder="Tên Facebook" required=""/><br/>
                    <input name="urlfacebook" type="url" class="form-control" id="urlfacebook" value="" placeholder="Đường dẫn facebook http://www.facebook.com/yyyyy" required=""/>
                </div>
            </div>
            <div class="form-group">
                <label for="vitri" class="col-sm-3 control-label">Vị trí:</label>
                <div class="col-sm-9">
                    <select name="vitri" class="form-control" >
                        <option value="-1">--- Chọn vị trí hiển thị ---</option>
                        <option value="0">Footer của trang khách hàng</option>
                        <option value="1">Phần liên hệ trang khách hàng</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <button type="reset" class="btn btn-warning">Làm lại</button>
                    <a class="btn btn-default" href="{{url('admin/ql=lienlac')}}">Quay lại</a>
                </div>
            </div>
        </form>
    </div>
</div>
{{ HTML::script('js/jquery-lienlac_admin-1.0.js') }}
<script type="text/javascript">
<?php
if (isset($message)) {
    ?>
        toastr.success('{{$message}}')
    <?php
}
?>
</script>