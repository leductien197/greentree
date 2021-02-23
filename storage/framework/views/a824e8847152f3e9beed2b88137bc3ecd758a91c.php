<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $__env->yieldContent('title'); ?></title>
    <!-- css -->
    <base href="/backend/">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="js/lumino.glyphs.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script type="text/javascript" src="../../editor/ckeditor/ckeditor.js"></script>
</head>
<body>
	<!-- header -->
    <?php echo $__env->make('backend.master.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!-- header -->
	<!-- sidebar left-->
	<?php echo $__env->make('backend.master.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<!--/. end sidebar left-->

	<!--main-->
	<?php echo $__env->yieldContent('content'); ?>
	<!--end main-->

    <!-- javascript -->
    <?php $__env->startSection('script'); ?>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/chart-data.js"></script>
    <?php echo $__env->yieldContent('data'); ?>
    <?php echo $__env->yieldContent('script_product'); ?>
    <?php echo $__env->yieldSection(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/backend/master/master.blade.php ENDPATH**/ ?>