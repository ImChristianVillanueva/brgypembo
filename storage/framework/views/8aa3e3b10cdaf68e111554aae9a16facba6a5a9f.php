
<?php $__env->startSection('sub-title','LOG IN'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.resident.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<style>

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main id="main">
  <section class="contact mt-5 section-bg" style="min-height: 80vh;">
    <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>Log in</h2>
          <p>Login to your account</p>
        </div>
        <div class="row mt-2">
          <div class="col-lg-6 mt-lg-0 mx-auto" data-aos="fade-left">
            <form method="POST" action="<?php echo e(route('login')); ?>" class="myform">  
              <?php echo csrf_field(); ?>
                
                <div class="card">
                  <div class="text-center mt-2">
                      <img  src="<?php echo e(trans('panel.logo')); ?>" alt="logo"  class="z-depth-2">
                      <hr>
                  </div>
                  <div class="card-body">
                    <div class="row">
                          <div class="form-group">
                              <input type="email" id="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>"  aria-label="Email" autofocus>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                          <div class="form-group">
                              <input type="password" id="password" name="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Password" aria-label="Password">
                              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($message); ?></strong>
                                  </span>
                              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="mt-2">Log In</button>
                      </div>
                      <p class="text-center mt-3 color-black" style="font-size: 15px; font-weight: 500;">Do not have an account yet? <a href="/register"><b class="color-black" style="font-weight: 700">Register here</b></a></p>
                      <p  class="text-center mt-3 color-black" style="font-size: 15px; font-weight: 500;" ><a href="/password/reset">Forgot your password?</a></p>
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

<?php echo $__env->make('../layouts.resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Swaggy\Desktop\brgypembo\resources\views/auth/login.blade.php ENDPATH**/ ?>