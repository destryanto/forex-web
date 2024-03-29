@if($row !=null)
<div class="panel panel-default">
    <div class="panel-heading"><i class="glyphicon glyphicon-repeat"></i>&nbsp;Chi tiết liên lạc</div>
    <div class="panel-body">
        <form id="product-form" class="form-horizontal" method="post" action="{{url('admin/send=email')}}" enctype="multipart/form-data" role="form">
            <input name="id" type="hidden" value="{{$row->id}}"/>
            <div class="form-group">
                <label for="hoten" class="col-sm-3 control-label">Họ tên người gửi:</label>
                <div class="col-sm-9">
                    <input name="hoten" type="text" class="form-control" id="title" readonly="" value="{{HTML::decode($row->hoten)}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-9">
                    <input name="email" type="email" value="{{$row->email}}" class="form-control" readonly=""  id="email" placeholder=""/>
                </div>
            </div>   
             <div class="form-group">
                <label for="tieude" class="col-sm-3 control-label">Tiêu đề:</label>
                <div class="col-sm-9">
                    <input name="tieude" type="text" class="form-control" id="title" readonly="" value="{{HTML::decode($row->tieude)}}"/>
                </div>
            </div>
            <div class="form-group">
                <label for="noidung" class="col-sm-3 control-label">Nội dung:</label>
                <div class="col-sm-9">
                    <textarea name="noidung" rows=15 class="form-control" id="contact" readonly=""/>{{HTML::decode($row->hoten)}}</textarea>
                </div>
            </div>   
             <div class="form-group">
                <label for="" class="col-sm-3 control-label">Thời gian gửi:</label>
                <label class="col-sm-9">{{date("h:i A| d/m/Y",strtotime($row->thoidiemgui))}}</label>
            </div>
             <div class="form-group">
                <label for="" class="col-sm-3 control-label">Trạng thái:</label>
                <div class="col-sm-9">
                  <input type="checkbox" name="xuly" class="xuly" value="{{$row->trangthai}}" id="xuly" <?=$row->trangthai == 0 ? "" : "checked='checked'"?>/>
                </div>
            </div>
             <div class="form-group">
                <label for="tieudetraloi" class="col-sm-3 control-label">Tiêu đề trả lời:</label>
                <div class="col-sm-9">
                    <input name="tieudetraloi" type="text" class="form-control" id="tieudetraloi" placeholder="Tiêu đề phản hồi" required="" value="{{HTML::decode($row->tieudetraloi)}}"/>
                </div>
            </div>                      
            <div class="form-group">
                <label for="noidungtraloi" class="col-sm-3 control-label">Nội dung trả lời:</label>
                <div class="col-sm-9">
                    <textarea name="noidungtraloi" rows=15 class="form-control" id="noidungtraloi" placeholder="Nhập nội dung phản hồi" required=""/>{{HTML::decode($row->noidungtraloi)}}</textarea>
                </div>
            </div>      
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Gửi</button>
                    <a class="btn btn-warning" href="{{url('admin/ql=lienhe')}}">Quay lại</a>
                </div>
            </div>
        </form>
    </div>
</div>
{{ HTML::script('js/ckeditor/ckeditor.js'); }}
<script type="text/javascript">
    CKEDITOR.replace('noidungtraloi', {
        height: 200,
        toolbar: 'Standard'
    });
<?php
if (isset($message)) {
    ?>
        toastr.success('{{$message}}')
    <?php
}
?>
</script>
@else
<script type="text/javascript">
    location.href="{{url('admin/ql=lienhe')}}";
</script>
@endif