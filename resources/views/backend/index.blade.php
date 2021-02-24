@extends('backend.master.master')
@section('title','Admin')
@section('admin')

@endsection
@section('content')
<!--main-->
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="\admin"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Tổng quan</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tổng quan</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-4 widget-left">
                        <span class="glyphicon glyphicon-signal icon-50" aria-hidden="true"></span>
                    </div>
                    <div class="col-sm-9 col-lg-8 widget-right">
                        <div class="large">Tổng số bài viết</div>
                        {{-- <div class="text-muted">Bài viết tháng 1</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <h2>
            {{$new}}
        </h2>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-4 widget-left">
                        <span class="glyphicon glyphicon-signal icon-50" aria-hidden="true"></span>
                    </div>
                    <div class="col-sm-9 col-lg-8 widget-right">
                        <div class="large">Cây Lúa</div>
                        {{-- <div class="text-muted">Bài viết tháng 1</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <h2> {{$lua}}</h2>
    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-4 widget-left">
                        <span class="glyphicon glyphicon-signal icon-50" aria-hidden="true"></span>
                    </div>
                    <div class="col-sm-9 col-lg-8 widget-right">
                        <div class="large">Cây Ngô</div>
                        {{-- <div class="text-muted">Bài viết tháng 1</div> --}}
                    </div>
                </div>
            </div>
        </div>

        <h2>{{$ngo}}</h2>
    </div>
</div>
<!--end main-->
@endsection


