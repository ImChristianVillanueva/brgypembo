
<?php $__env->startSection('sub-title','DOCUMENTS'); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.resident.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main id="main">
 <section id="pricing" class="pricing mt-5 section-bg" style="min-height: 80vh;">
      <div class="container" data-aos="fade-up"> 

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>Request Now</p>
        </div>

        <div class="row">
          <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-3 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3 class="text-uppercase"><?php echo e($document->name ?? ''); ?></h3>
              <h4><sup>₱</sup><?php echo e($document->amount ?? ''); ?><span>per request</span></h4>
              
              <ul style="min-height: 170px;">
                  <span class="text-dark">Requirements</span>
                  <?php $__currentLoopData = $document->requirements()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><i class="bx bx-file"></i><?php echo e($requirement->name ?? ''); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
              </ul>
              <div class="text-center">
                <a href="/resident/request_document/<?php echo e($document->id); ?>" class="buy-btn">Request Now</a>
              </div>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('../layouts.resident', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/resident/documents.blade.php ENDPATH**/ ?>