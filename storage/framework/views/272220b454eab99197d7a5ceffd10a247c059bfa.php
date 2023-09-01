<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php echo $__env->yieldContent('sub-title'); ?> | PEMBO
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(trans('panel.logo_only')); ?>">
  <link rel="icon" type="image/png" href="/resident/img/logoo.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('resident/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('resident/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('resident/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('resident/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('resident/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('resident/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('resident/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <link href="<?php echo e(asset('resident/css/style.css')); ?>" rel="stylesheet">
 

  <?php echo $__env->yieldContent('style'); ?>

</head>

<body>
    
  <?php echo $__env->yieldContent('navbar'); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->yieldContent('footer'); ?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!--   JQUERY JS Files   -->
  <script src="<?php echo e(asset('/assets_v1/vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets_v1/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets_v1/vendor/js-cookie/js.cookie.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets_v1/vendor/jquery.scrollbar/jquery.scrollbar.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/assets_v1/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')); ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>


  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('resident/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/glightbox/js/glightbox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/swiper/swiper-bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/waypoints/noframework.waypoints.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('resident/js/main.js')); ?>"></script>

  <!-- DATE -->
  <script src="<?php echo e(asset('resident/vendor/date/moment.min.js')); ?>"></script>
  <script src="<?php echo e(asset('resident/vendor/date/bootstrap-datetimepicker.js')); ?>" type="text/javascript"></script>
  <?php echo $__env->yieldContent('script'); ?>

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo e(asset('website/plugin/bootstrap/bootstrap.min.css')); ?>">
  <!-- Ionic Icon Css -->
  <link rel="stylesheet" href="<?php echo e(asset('website/plugin/Ionicons/css/ionicons.min.css')); ?>">
  <!-- animate.css -->
  <link rel="stylesheet" href="<?php echo e(asset('wesbite/plugin/animate-css/animate.css')); ?>">
  <!-- Magnify Popup -->
  <link rel="stylesheet" href="<?php echo e(asset('website/plugin/magnific-popup/magnific-popup.css')); ?>">
  <!-- Slick CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('website/plugin/slick/slick.css')); ?>">

  <!-- Main Stylesheet -->
  <link href="<?php echo e(asset('website/css/style.css')); ?>" rel="stylesheet">

   <!-- Main jQuery -->
   <script src="<?php echo e(asset('website/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- Bootstrap 3.1 -->
    <script src="<?php echo e(asset('website/plugins/bootstrap/bootstrap.min.js')); ?>"></script>
    <!-- slick Carousel -->
    <script src="<?php echo e(asset('website/plugins/slick/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('website/plugins/magnific-popup/jquery.magnific-popup.min.js')); ?>"></script>
    <!-- filter -->
    <script src="<?php echo e(asset('website/plugins/shuffle/shuffle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('website/plugins/SyoTimer/jquery.syotimer.min.js')); ?>"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
    <script src="<?php echo e(asset('website/plugins/google-map/map.js ')); ?>"></script>

    <script src="<?php echo e(asset('website/plugins/js/script.js')); ?>"></script>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="<?php echo e(asset('website2/plugins/bootstrap/bootstrap.min.css')); ?>">
  <!-- Revo Slider CSS
    ================================================== -->
  <!-- RS5.0 Main Stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/css/settings.css')); ?>">
  <!-- RS5.0 Layers and Navigation Styles -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/css/layers.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>plugins/revo-slider/css/navigation.css">
  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/css/settings.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/css/layers.css')); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('website2/plugins/revo-slider/css/navigation.css')); ?>">
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="<?php echo e(asset('website2/plugins/themefisher-font/style.css')); ?>">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="<?php echo e(asset('website2/plugins/lightbox2/dist/css/lightbox.min.css')); ?>">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="<?php echo e(asset('website2/plugins/slick-carousel/slick/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('website2/plugins/slick-carousel/slick/slick-theme.css')); ?>">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('website2/css/style.css')); ?>">

  
  


</body>
<?php /**PATH C:\Users\Swaggy\Desktop\brgypembo\resources\views////layouts/resident.blade.php ENDPATH**/ ?>