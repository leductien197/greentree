<?php $__env->startSection('title','Green Tree'); ?>
<?php $__env->startSection('content'); ?>

		<!-- main -->

        <div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Bài viết nổi bật</span></h2>
					</div>
				</div>
				<div class="row" >
                    <?php $__currentLoopData = $hotNew; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <a href="/detail/<?php echo e($row->id); ?>">
						<div class="product-entry"  style="  box-shadow: 5px 10px 8px 1px #888888;display:flex;flex-direction:column">
							<div class="product-img" style="background-image: url(/backend/img/<?php echo e($row->img); ?>);">
							</div>
							<div class="desc" style="margin:0px 20px;">
                                    <h4 style="color:green"><a href=""></a>Tiêu Đề: <?php echo e($row->title); ?></h4>
                                    <p style="flex-grow: 1;color:green" class="text-index">Đặc điểm:<?php echo e($row->symptom); ?></p>
                            </div>
                            <p style="margin-left:20px;margin-top:auto;color:blue">Ngày đăng:<?php echo e($row->created_at); ?></p>
                        </div>
                    </a>
					</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
        </div>

        <div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Bài viết mới</span></h2>
					</div>
				</div>
				<div class="row" >
                    <?php $__currentLoopData = $new; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <a href="/detail/<?php echo e($row->id); ?>">
						<div class="product-entry"  style="  box-shadow: 5px 10px 8px 1px #888888;display:flex;flex-direction:column">
							<div class="product-img" style="background-image: url(/backend/img/<?php echo e($row->img); ?>);">
							</div>
							<div class="desc" style="margin:0px 20px;">
                                    <h4 style="color:green"><a href=""></a>Tiêu Đề: <?php echo e($row->title); ?></h4>
                                    <p style="flex-grow: 1; color:green" class="text-index">Đặc điểm:<?php echo e($row->symptom); ?></p>
                            </div>
                            <p style="margin-left:20px;margin-top:auto; color:blue">Ngày đăng:<?php echo e($row->created_at); ?></p>
                        </div>
                        </a>
					</div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


				</div>
            </div>
        </div>
        <!-- end main -->

          <!-- Load Facebook SDK for JavaScript -->
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/frontend/index.blade.php ENDPATH**/ ?>