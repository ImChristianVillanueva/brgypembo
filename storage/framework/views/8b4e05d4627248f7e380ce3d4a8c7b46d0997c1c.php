<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>E-Pembo</h3>
          <p>
              Barangay Pembo Hall <br> Makati city<br><br>
            <strong>Phone:</strong> (02) 85530846<br>
            <strong>Email:</strong> barangaypembo@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/#team">Officials</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/#contact">Contact Us</a></li>
          </ul>
        </div>
        <?php
          $documents = App\Models\Document::where('isAvailable', true)->orderBy('name', 'asc')->get();
        ?>
        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Available Documents</h4>
          <ul>
            <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><i class="bx bx-chevron-right"></i> <a href="/resident/request_document/<?php echo e($document->id); ?>"><?php echo e($document->name ?? ''); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>Visit our social media platform.</p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/MyBarangayPembo/" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/skpembo/" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container footer-bottom clearfix">
    <div class="copyright">
      &copy; Copyright <strong><span>BARANGAY PEMBO</span></strong>. All Rights Reserved
    </div>
    
  </div>
</footer><?php /**PATH C:\Users\Swaggy\Desktop\brgypembo\resources\views////partials/resident/footer.blade.php ENDPATH**/ ?>