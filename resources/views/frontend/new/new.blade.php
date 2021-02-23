@extends('frontend.master.master')
@section('title','Danh sách')
@section('content')

<div class="colorlib-shop">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                <h2><span>Tất cả bài viết</span></h2>
            </div>
        </div>
        <div class="row" >
            @foreach ($new as $row)
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
        <div align='right'>
            {!!$new->links()!!}
        </div>
    </div>
</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v9.0'
    });
  };

  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="101251078645611"
theme_color="#fa3c4c"
logged_in_greeting="Xin chào ! Cảm ơn bạn đã liên hệ. Chúng tôi có thể giúp gì cho bạn."
logged_out_greeting="Xin chào ! Cảm ơn bạn đã liên hệ. Chúng tôi có thể giúp gì cho bạn.">
</div>
 @endsection
