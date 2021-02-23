@extends('backend.master.master')
@section('title','Bài Viết')
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
				<li class="active">Danh sách bài viết</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách bài viết</h1>
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

								<a href="\admin\news\add" class="btn btn-primary">Thêm bài viết</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin bài viết</th>

											 <th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($new as $row)
                                        <tr>
											<td>{{$row->id}}</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="/backend/img/{{$row->img}}"  width="100px" class="thumbnail"></div>
													<div class="col-md-9">
                                                        {{-- <p><strong>Cây : {{$row->title}}</strong></p> --}}
														<p><strong>Tên bệnh: {{$row->title}}</strong></p>
														<p><strong>Triệu chứng: {{$row->symptom}}</strong></p>

													</div>
												</div>
											</td>

											<td>
												<a href="/admin/news/edit/{{$row->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												 <a style="margin-top:15px" onclick="return del('{{$row->id}}')" href="/admin/news/del/{{$row->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
                                        @endforeach
									</tbody>
                                </table>
                                <div align='right'>
                                    {!!$new->links()!!}
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
                return confirm('Bạn có muốn xóa sản phẩm '+name)
            }
        </script>
@endsection
