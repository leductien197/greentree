@extends('backend.master.master')
@section('title','Sửa bài viết')
@section('admin')

@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa bài viết</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form  method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Cây</label>
                                                <select name="tree" class="form-control">
                                                    @foreach ($tree as $key=>$row)
                                                         <option value={{$row->id}}
                                                          @if($new->trees_id==$row->id)
                                                            selected
                                                          @endif
                                                         >{{$row->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tên bệnh</label>
                                                <input required type="text" value="{{$new->title}}" name="title" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Triệu chứng</label>
                                                <input required type="text" value="{{$new->symptom}}" name="symptom" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Sản phẩm nổi bật</label>
                                                <select  name="hot" class="form-control">
                                                    <option @if ($new->hot==1) selected @endif  value="1">Có</option>
                                                    <option @if ($new->hot==0) selected @endif  value="0">Không</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Ảnh bài viết</label>
                                                <input id="img" type="file" name="new_img" class="form-control hidden"
                                                    onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="/backend/img/{{$new->img}}">
                                            </div>
                                        </div>
                                    </div>
                    </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <label>Nội Dung</label>
                                <textarea name="content" class="form-control ckeditor" id="editor1">{{$new->content}}</textarea>
                       </div>
                        <button class="btn btn-success" name="add-product" type="submit">Sửa cây</button>
                        <button class="btn btn-danger" type="reset">Huỷ bỏ</button>

                    </div>

                </div>
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
    </div>
    </div>
    </form>
    </div>

    <!--/.row-->

    </div>
    <!--end main-->

    {{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor1'); </script> --}}
@endsection

@section('script_product')
<script>
    function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            // sự kiện file đã load đc vào web
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function(){
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
</script>
@endsection
