@extends('frontend.master.master')
@section('title','Chi tiết')
@section('content')

		<!-- main -->
        <div style="align-content: center">
            <div class="colorlib-shop">
                <div class="container">
                {{-- <h3>{{$detail->title}}</h3> --}}
                <br>
                <br>
                    <div class="row">
                        <div class="col-md-12">
                             {!!$detail->content!!}
                        </div>
                    </div>
                 </div>
            </div>

            <hr style="border : 1px solid green; width:84%"/>
            <div style="display:flex; margin-left:8%; flex-direction:column">
                <h3 style="color:green">Để lại bình luận</h3>
                <label style="color:green">Họ tên</label>
                <input name="ctComment" style="width:300px !important; height:40px !important" class="w3-input w3-border" type="text">
                {{-- <input type="text" name="ctComment" class="form-control" > --}}
                <label style="margin-top:20px;color:green">Nội dung</label>
                <input name="ctComment" style="width:300px !important; height:150px !important" class="w3-input w3-border" type="text">
                {{-- <input type="text" name="ctComment" class="form-control" > --}}
                <button style="margin-top:20px;width:45px; height:30px; display:flex;justify-content:center,align-items:center;color:white;background:green"  name="add-comment" type="submit">Gửi</button>
                <h3 style="margin-top:30px ">Bình luận:</h3>
            </div>

        </div>
		<!-- end main -->
@endsection
