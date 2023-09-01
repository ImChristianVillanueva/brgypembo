

<?php $__env->startSection('sub-title','Verify Email'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.resident.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<main id="main">
  <section class="contact mt-5 section-bg" style="min-height: 80vh;">
    <div class="container">
        <div class="row mt-2">
          <div class="col-lg-6 mt-lg-0 mx-auto" data-aos="fade-left">
            
            <form class="myform" method="POST" action="<?php echo e(route('verification.resend')); ?>">
              <?php echo csrf_field(); ?>
              <div class="card">
                    <div class="text-center mt-2">
                        <img  src="<?php echo e(trans('panel.logo')); ?>" alt="logo"  class="z-depth-2">
                        <hr>
                    </div>
                    
                    <div class="section-title" data-aos="zoom-out">
                        <h2>Verify your email address</h2>
                        <?php if(session('resent')): ?>
                            <p class="text-success">
                                <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                            </p>
                        <?php endif; ?>
                        <p class="p-3">
                            we've sent an email to <b><?php echo e(auth()->user()->email); ?></b> to verify your email address and activate your account. The link in the email will expire in 60 minutes.
                           <button type="submit" class="text-primary" style="padding: 0; background-color:transparent; text-transformation: none;">Click here</button> if you did not receive an email
                        </p>
                    </div>
              </div>
            
            </form>
          </div>
        </div>
    </div>
  </section>
</main>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('../partials.resident.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script> 

</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('../layouts.resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/auth/verify.blade.php ENDPATH**/ ?>