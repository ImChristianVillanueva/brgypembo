
<?php $__env->startSection('sub-title','ANNOUNCEMENTS'); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('../partials.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">
  <div class="row mt-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-md-10">
                    <h6>MANAGE ANNOUNCEMENTS</h6>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_access')): ?>
                  <div class="col-md-2">
                    <a href="<?php echo e(route('admin.announcements.create')); ?>" class="btn btn-primary">Add Announcement</a>
                  </div>
                <?php endif; ?>
                </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" style="width: 100%;">
                <thead>
                  <tr>
                  <th class="text-secondary opacity-7"></th>
                  <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Title</th>
                        <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Description</th>
                        <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Image Uploaded</th>
                        <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Date_Posted</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $announcements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $announcement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="<?php echo e(route('admin.announcements.edit', $announcement->id)); ?>" class="btn btn-primary">Edit</a>
                            <form action="<?php echo e(route('admin.announcements.destroy', $announcement->id)); ?>" method="POST" class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?');">Delete</button>
                            </form>
                        </td>
                        <td><?php echo e($announcement->title); ?></td>
                        <td><?php echo e($announcement->description); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/' . $announcement->image)); ?>" class="card-img-top w-50 h-50" alt="<?php echo e($announcement->title); ?>">
                        </td>
                        <td><?php echo e($announcement->created_at->format('F j, Y')); ?></td>
                        
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
      <?php $__env->startSection('footer'); ?>
          <?php echo $__env->make('../partials.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php $__env->stopSection(); ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/admin/announcement.blade.php ENDPATH**/ ?>