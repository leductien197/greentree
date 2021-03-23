@extends('backend.master.master')
@section('title','Thêm mới cây')
@section('admin')

@endsection
@section('content')

    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm cây trồng</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm cây</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">

                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Tên cây</label>
                                            <input required type="text" name="name" class="form-control">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label>Mã cây</label>
                                            <input required type="text" name="code" class="form-control">
                                        </div> --}}
                                    </div>

                                </div>
                            </div>
                           <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" name="add-tree" type="submit">Thêm cây</button>
                                    <button class="btn btn-danger" type="reset">Thêm Lại</button>
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
