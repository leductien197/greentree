<?php $__env->startSection('title','Sửa cây'); ?>
<?php $__env->startSection('admin'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                    <?php echo csrf_field(); ?>
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <?php if(session('thongbao')): ?>
                            <div class="alert alert-success" role="alert">
                            <strong><?php echo e(session('thongbao')); ?></strong>
                            </div>
                        <?php endif; ?>
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Tên cây</label>
                                                <input required type="text" name="name" class="form-control"
                                                    value="<?php echo e($tree->name); ?>">
                                                    
                                            </div>
                                            
                                    </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-success" name="edit-tree" type="submit">Sửa cây</button>
                        <button class="btn btn-danger" type="reset">Sửa Lại</button>

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


<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/backend/Tree/editTree.blade.php ENDPATH**/ ?>