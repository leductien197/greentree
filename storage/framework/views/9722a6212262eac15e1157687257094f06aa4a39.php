<?php $__env->startSection('title','Chi tiết'); ?>
<?php $__env->startSection('content'); ?>

		<!-- main -->
        <div style="align-content: center">
            <div class="colorlib-shop">
                <div class="container">
                
                <br>
                <br>
                    <div class="row">
                        <div class="col-md-12">
                             <?php echo $detail->content; ?>

                        </div>
                    </div>
                 </div>
            </div>

            
                
                
            

        </div>
		<!-- end main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/frontend/new/detailNew.blade.php ENDPATH**/ ?>