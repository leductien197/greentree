<?php $__env->startSection('title','Sửa bài viết'); ?>
<?php $__env->startSection('admin'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa bài viết</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form  method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row" style="margin-bottom:40px">
                                <div class="col-xs-8">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <label>Cây</label>
                                                <select name="tree" class="form-control">
                                                    <?php $__currentLoopData = $tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <option value=<?php echo e($row->id); ?>

                                                          <?php if($new->trees_id==$row->id): ?>
                                                            selected
                                                          <?php endif; ?>
                                                         ><?php echo e($row->name); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Tên bệnh</label>
                                                <input required type="text" value="<?php echo e($new->title); ?>" name="title" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Triệu chứng</label>
                                                <input required type="text" value="<?php echo e($new->symptom); ?>" name="symptom" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Sản phẩm nổi bật</label>
                                                <select  name="hot" class="form-control">
                                                    <option <?php if($new->hot==1): ?> selected <?php endif; ?>  value="1">Có</option>
                                                    <option <?php if($new->hot==0): ?> selected <?php endif; ?>  value="0">Không</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Ảnh bài viết</label>
                                                <input id="img" type="file" name="new_img" class="form-control hidden"
                                                    onchange="changeImg(this)">
                                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="/backend/img/<?php echo e($new->img); ?>">
                                            </div>
                                        </div>
                                    </div>
                    </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="form-group col-md-12">
                                <label>Nội Dung</label>
                                <textarea name="content" class="form-control ckeditor" id="editor1"><?php echo e($new->content); ?></textarea>
                       </div>
                        <button class="btn btn-success" name="add-product" type="submit">Sửa cây</button>
                        <button class="btn btn-danger" type="reset">Huỷ bỏ</button>

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

<?php $__env->startSection('script_product'); ?>
<script>
    function changeImg(input){
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if(input.files && input.files[0]){
            var reader = new FileReader();
            // sự kiện file đã load đc vào web
            reader.onload = function(e){
                //Thay đổi đường dẫn ảnh
                $('#avatar').attr('src',e.target.result)
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function(){
        $('#avatar').click(function(){
            $('#img').click();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/backend/News/editNews.blade.php ENDPATH**/ ?>