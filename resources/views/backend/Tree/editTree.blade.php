@extends('backend.master.master')
@section('title','Sửa cây')
@section('admin')

@endsection
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa cây</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            @if (session('thongbao'))
                            <div class="alert alert-success" role="alert">
                            <strong>{{session('thongbao')}}</strong>
                            </div>
                        @endif
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Tên cây</label>
                                                <input required type="text" name="name" class="form-control"
                                                    value="{{$tree->name}}">
                                                    {{-- {{showErrors($errors,'name')}} --}}
                                            </div>
                                            {{-- <div class="form-group">
                                                <label>Mã cây</label>
                                                <input required type="text" name="code" class="form-control"
                                                    value="{{$tree->code}}">
                                                    {{showErrors($errors,'code')}}
                                            </div> --}}
                                    </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success" name="edit-tree" type="submit">Sửa cây</button>
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


@endsection
