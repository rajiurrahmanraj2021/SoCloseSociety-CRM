<!DOCTYPE html>
    <html lang="en">
        <head>

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <!--=====Bootstrap CSS=====-->
            <link href="<?php echo e(asset('dashboard_assets/assets')); ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
            <!--=====FONTAWESOME ICON=====-->
            <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/assets')); ?>/icons/css/all.css" />
            <!--=====GOOGLE FONTS=====-->
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
                rel="stylesheet">
            <link
                href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
                rel="stylesheet">
            <!--====Vmap CSS=====-->
            <link href="<?php echo e(asset('dashboard_assets/assets')); ?>/plugins/vmap/css/jqvmap.css" media="screen" rel="stylesheet" type="text/css">
            <!--==========Data Tables CSS==========-->
            <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/assets')); ?>/plugins/datatables/css/jquery.dataTables.min.css">
            <!--=====MAIN CSS=====-->
            <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/assets')); ?>/css/styles.css" />
            <!--==========Responsive CSS==========-->
            <link rel="stylesheet" href="<?php echo e(asset('dashboard_assets/assets')); ?>/css/responsive.css">
             <!--==========toastr CSS==========-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
            
            <title><?php echo e(config('app.name')); ?> | <?php echo $__env->yieldContent('title'); ?> </title>
        </head>
    <body>
<?php /**PATH C:\Users\HP\Desktop\CRM\SoCloseSociety-CRM\resources\views/layouts/dashboard_css.blade.php ENDPATH**/ ?>