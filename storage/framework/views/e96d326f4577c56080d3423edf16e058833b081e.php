<?php $__env->startSection('title','Danh sách bệnh cây'); ?>
<?php $__env->startSection('admin'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
											
											
											 
											 <th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        <?php $__currentLoopData = $plantDisease; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
											<td><?php echo e($row->id); ?></td>
											<td>
												<div class="row">
													<div class="col-md-3"><img src="/backend/img/<?php echo e($row->img); ?>"  width="100px" class="thumbnail"></div>
													<div class="col-md-9">
                                                        
														<p><strong>Mã bệnh : <?php echo e($row->code); ?></strong></p>
														<p><strong>Tên bệnh: <?php echo e($row->name); ?></strong></p>
														
														
													</div>
												</div>
											</td>

											<td>
												<a href="/admin/plantdisease/edit/<?php echo e($row->id); ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return del('<?php echo e($row->name); ?>')" href="/admin/plantdisease/del/<?php echo e($row->id); ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
##parent-placeholder-cb5346a081dcf654061b7f897ea14d9b43140712##
        <script>
            function del(name){
                return confirm('Bạn có muốn xóa bệnh '+name)
            }
        </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/backend/PlantDisease/listPlantdisease.blade.php ENDPATH**/ ?>