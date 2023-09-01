
<?php $__env->startSection('sub-title','ANNOUNCEMENTS'); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('../partials.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-white mb-5">Create New Announcement</h2>
    <form method="post" action="<?php echo e(route('admin.announcements.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="title" class="text-white">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content" class="text-white">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label text-white">Image</label>
            <input type="file" name="image" class="form-control" id="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('../partials.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/admin/create_announcement.blade.php ENDPATH**/ ?>