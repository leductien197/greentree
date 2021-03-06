@extends('backend.master.master')
@section('title','Danh sách bệnh cây')
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
				<li class="active">Danh sách bệnh cây</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách bệnh cây</h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">

					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div class="alert bg-success" role="alert">
									<svg class="glyph stroked checkmark">
										<use xlink:href="#stroked-checkmark"></use>
									</svg>Đã thêm thành công<a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
								</div>
								<a href="\admin\plantdisease\add" class="btn btn-primary">Thêm bệnh</a>
								<table class="table table-bordered" style="margin-top:20px;">

									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Thông tin bệnh cây</th>
											{{-- <th>Giá sản phẩm</th> --}}
											{{-- <th>Tình trạng</th> --}}
											 {{-- <th>Danh mục</th> --}}
											 <th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($plantDisease as $row)
                                        <tr>
											<td>{{$row->id}}</td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="/backend/img/{{$row->img}}"  width="100px" class="thumbnail"></div>
													<div class="col-md-9">
                                                        {{-- <select required name="product_state" class="form-control">
                                                            <option selected value="1">Về: Cây Lúa</option>
                                                        </select> --}}
														<p><strong>Mã bệnh : {{$row->code}}</strong></p>
														<p><strong>Tên bệnh: {{$row->name}}</strong></p>
														{{-- <p>Tên bệnh: bệnh đốm lá lúa</p> --}}
														{{-- <p>Danh mục:Cây lúa</p> --}}
													</div>
												</div>
											</td>

											<td>
												<a href="/admin/plantdisease/edit/{{$row->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return del('{{$row->name}}')" href="/admin/plantdisease/del/{{$row->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
                                        @endforeach

									</tbody>
								</table>
								<div align='right'>
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
									</ul>
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
                return confirm('Bạn có muốn xóa bệnh '+name)
            }
        </script>
@endsection

