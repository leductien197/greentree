@extends('backend.master.master')
@section('title','Sửa bệnh cây')
@section('admin')

@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa bệnh</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            {{-- <div class="form-group">
                                                <label>Danh mục</label>
                                                <select name="category" class="form-control">
                                                    <option value='1'>Cây</option>
                                                    <option value='3' selected>---|Áo khoác nam</option>
                                                    <option value='2'>Nữ</option>
                                                    <option value='4'>---|Áo khoác nữ</option>
                                                </select>
                                            </div> --}}
                                            <div class="form-group">
                                                <label>Mã bệnh</label>
                                                <input required type="text" name="plantDisease_code" class="form-control"
                                                    value="{{$plantDisease->code}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Tên bệnh</label>
                                                <input required type="text" name="plantDisease_name" class="form-control"
                                                    value="{{$plantDisease->name}}">
                                            </div>
                                            {{-- <div class="form-group">
                                                <label>Giá sản phẩm (Giá chung)</label> <a href="admin/product/edit-variant/1"><span
                                                        class="glyphicon glyphicon-chevron-right"></span>
                                                    Giá theo biến thể</a>
                                                <input required type="number" name="product_price" class="form-control"
                                                    value="150000">
                                            </div> --}}

                                            {{-- <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select required name="product_state" class="form-control">
                                                    <option selected value="1">Còn hàng</option>
                                                    <option value="0">Hết hàng</option>
                                                </select>
                                            </div> --}}
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Ảnh sản phẩm</label>
                                                <input id="img" type="file" name="plantDisease_img" class="form-control hidden"
                                                    onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="/backend/img/{{$plantDisease->img}}">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Thông tin</label>
                                        <textarea required name="info" style="width: 100%;height: 100px;">thông tin</textarea>
                                    </div> --}}


            </div>

            <div class="panel-body">
                <form class="row">
                    <div class="col-md-12">
                        {{-- <div class="form-group">
                            <label>Miêu tả</label>
                            <textarea id="editor" required name="description" style="width: 100%;height: 100px;"></textarea>

                        </div> --}}


                        <button class="btn btn-success" name="add-product" type="submit">Sửa bệnh</button>
                        <button class="btn btn-danger" type="reset">Huỷ bỏ</button>

                    </div>
                </form>
                </div>
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
    </div>
    </div>
    </div>

    <!--/.row-->

    </div>
    <!--end main-->


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
