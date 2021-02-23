@extends('backend.master.master')
@section('title','Thêm mới bệnh cây')
@section('admin')

@endsection
@section('content')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm bệnh cây</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="panel-heading">Thêm bệnh cây</div>
                
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Cây</label>
                                            <select name="tree" class="form-control">
                                                @foreach ($tree as $key=>$row)
                                                <option value='{{$row->id}}' selected>{{$row->name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label>Mã bệnh</label>
                                            <input required type="text" name="plantdisease_code" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên bệnh</label>
                                            <input required type="text" name="plantdisease_name" class="form-control">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Giá sản phẩm (Giá chung)</label>
                                            <input required type="number" name="product_price" class="form-control">
                                        </div> --}}

                                        {{-- <div class="form-group">
                                            <label>Trạng thái</label>
                                            <select required name="product_state" class="form-control">
                                                <option value="1">Còn hàng</option>
                                                <option value="0">Hết hàng</option>
                                            </select>
                                        </div> --}}
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Ảnh sản phẩm</label>
                                            <input id="img" type="file" name="plantdisease_img" class="form-control hidden"
                                                onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="img/import-img.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" name="add-plantdisease" type="submit">Thêm cây</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                            </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
            </div>
        </div>

        <!--/.row-->
    </div>

@endsection
@section('script_product')
<script>

    function changeImg(input) {
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function (e) {
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        $('#avatar').click(function () {
            $('#img').click();
        });
    });

</script>
@endsection
