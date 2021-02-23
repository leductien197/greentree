<?php $__env->startSection('title','Admin'); ?>
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
            <li class="active">Tổng quan</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tổng quan</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-6">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-4 widget-left">
                        <span class="glyphicon glyphicon-signal icon-50" aria-hidden="true"></span>
                    </div>
                    <div class="col-sm-9 col-lg-8 widget-right">
                        <div class="large">20</div>
                        <div class="text-muted">Bài viết tháng 1</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-3 col-lg-5 widget-left">
                        <svg class="glyph stroked empty-message">
                            <use xlink:href="#stroked-empty-message"></use>
                        </svg>
                    </div>
                    <div class="col-sm-9 col-lg-7 widget-right">
                        <div class="large">52</div>
                        <div class="text-muted">Bình luận</div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <!--/.row-->

    <!--/.row-->

</div>
<!--end main-->
<?php $__env->stopSection(); ?>



<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/backend/index.blade.php ENDPATH**/ ?>