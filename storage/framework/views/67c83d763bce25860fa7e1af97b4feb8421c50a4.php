<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="/frontend/">
    <!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custome.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body>
	    <!--header -->
            <?php echo $__env->make('frontend.master.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<!-- End header -->
        <!-- main -->
            <?php echo $__env->yieldContent('content'); ?>
		<!-- end main -->
		<!-- footer -->
            <?php echo $__env->make('frontend.master.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end  footer -->

	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
    <script src="js/main.js"></script>
    <?php echo $__env->yieldContent('script_detail'); ?>
    <?php echo $__env->yieldContent('script_cart'); ?>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v9.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat"
        attribution=setup_tool
        page_id="101251078645611"
        theme_color="#6699cc"
        logged_in_greeting="Xin chào ! Cảm ơn bạn đã liên hệ. Chúng tôi có thể giúp gì cho bạn."
        logged_out_greeting="Xin chào ! Cảm ơn bạn đã liên hệ. Chúng tôi có thể giúp gì cho bạn.">
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\blog\resources\views/frontend/master/master.blade.php ENDPATH**/ ?>