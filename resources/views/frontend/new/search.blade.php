@extends('frontend.master.master')
@section('title','Kết quả tìm kiếm')
@section('content')

		<!-- main -->

<div class="colorlib-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2><span>Kết quả tìm kiếm</span></h2>
            </div>
        </div>
        <div class="row" >
            @foreach ($search as $row)
            <div class="col-md-4">
                <a href="/detail/{{$row->id}}">
                <div class="product-entry"  style="  box-shadow: 5px 10px 8px 1px #888888;display:flex;flex-direction:column">
                    <div class="product-img" style="background-image: url(/backend/img/{{$row->img}});">
                    </div>
                    <div class="desc" style="margin:0px 20px;">
                            <h4 style="color:green"><a href=""></a>Tiêu Đề: {{$row->title}}</h4>
                            <p style="flex-grow: 1; color:green" class="text-index">Đặc điểm:{{$row->symptom}}</p>
                    </div>
                    <p style="margin-left:20px;margin-top:auto; color:blue">Ngày đăng:{{$row->created_at}}</p>
                </div>
                  </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
