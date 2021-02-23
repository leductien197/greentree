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

            <hr style="border : 1px solid green; width:84%"/>
            <div style="display:flex; margin-left:8%; flex-direction:column">
                <h3 style="color:green">Để lại bình luận</h3>
                <label style="color:green">Họ tên</label>
                <input name="ctComment" style="width:300px !important; height:40px !important" class="w3-input w3-border" type="text">
                
                <label style="margin-top:20px;color:green">Nội dung</label>
                <input name="ctComment" style="width:300px !important; height:150px !important" class="w3-input w3-border" type="text">
                
                <button style="margin-top:20px;width:45px; height:30px; display:flex;justify-content:center,align-items:center;color:white;background:green"  name="add-comment" type="submit">Gửi</button>
                <h3 style="margin-top:30px ">Bình luận:</h3>
            </div>

        </div>
		<!-- end main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.master.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/frontend/new/detailNew.blade.php ENDPATH**/ ?>