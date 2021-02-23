@extends('backend.master.master')
@section('title','Danh sách cây')
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
				<li class="active">Danh sách cây</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách cây</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
                                @if (session('thongbao'))
                                <div class="alert bg-success" role="alert">
                                    <svg class="glyph stroked checkmark">
                                        <use xlink:href="#stroked-checkmark"></use>
                                    </svg>{{session('thongbao')}}<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                                @endif

								<a href="\admin\tree\add" class="btn btn-primary">Thêm cây</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin cây</th>

											 <th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($tree as $row)
										<tr>
											<td>{{$row->id}}</td>
											<td>
												<div class="row">
													<div class="col-md-9">
														{{-- <p><strong>Mã cây : {{$row->code}}</strong></p> --}}
														<p><strong>Tên cây : {{$row->name}}</strong></p>
													</div>
												</div>
											</td>
											<td>
												<a href="\admin\tree\edit\{{$row->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return del('{{$row->name}}')" href="/admin/tree/del/{{$row->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
                                        @endforeach
									</tbody>
								</table>
                                <div align='right'>
                                    {!!$tree->links()!!}
                                </div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->
			</div>
            <!--end main-->
@endsection
@section('script')
@parent
        <script>
            function del(name){
                return confirm('Bạn có muốn xóa cây '+name)
            }
        </script>
@endsection
