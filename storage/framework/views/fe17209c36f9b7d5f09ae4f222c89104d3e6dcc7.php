<?php $__env->startSection('title','Danh sách cây'); ?>
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
                                <?php if(session('thongbao')): ?>
                                <div class="alert bg-success" role="alert">
                                    <svg class="glyph stroked checkmark">
                                        <use xlink:href="#stroked-checkmark"></use>
                                    </svg><?php echo e(session('thongbao')); ?><a href="#" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                                </div>
                                <?php endif; ?>

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
                                        <?php $__currentLoopData = $tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($row->id); ?></td>
											<td>
												<div class="row">
													<div class="col-md-9">
														
														<p><strong>Tên cây : <?php echo e($row->name); ?></strong></p>
													</div>
												</div>
											</td>
											<td>
												<a href="\admin\tree\edit\<?php echo e($row->id); ?>" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a onclick="return del('<?php echo e($row->name); ?>')" href="/admin/tree/del/<?php echo e($row->id); ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table>
                                <div align='right'>
                                    <?php echo $tree->links(); ?>

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
                return confirm('Bạn có muốn xóa cây '+name)
            }
        </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/backend/Tree/listTree.blade.php ENDPATH**/ ?>