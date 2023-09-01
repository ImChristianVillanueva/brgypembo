
<?php $__env->startSection('sub-title','BLOTTER'); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('../partials.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h2 class="text-white mb-5">Create New Blotter</h2>
    <form method="post" action="<?php echo e(route('admin.blotter.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="complainant" class="text-white">Complainant:</label>
            <input type="text" class="form-control" id="complainant" name="complainant" required>
        </div>
        <div class="form-group">
            <label for="respondent" class="text-white">Respondent:</label>
            <input class="form-control" id="respondent" name="respondent" type="text" required>
        </div>
        <div class="mb-3">
            <label for="victim" class="form-label">Victim:</label>
            <input type="text" name="victim" class="form-control" id="victim" required>
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location:</label>
            <input type="text" name="location" class="form-control" id="location" required>
        </div>
        <div class="form-group">
            <label for="date" >Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" name="time" required>
        </div>
        <div class="form-group">
            <label for="details">Details:</label>
            <textarea class="form-control" id="details" name="details" rows="5" required></textarea>
        </div>
        <div class="form-group">
        <label for="status">Choose Status:</label>
            <select id="status" name="status">
                <option value="active">Active</option>
                <option value="settled">Settled</option>
                <option value="scheduled">Scheduled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('../partials.admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/admin/create_blotter.blade.php ENDPATH**/ ?>