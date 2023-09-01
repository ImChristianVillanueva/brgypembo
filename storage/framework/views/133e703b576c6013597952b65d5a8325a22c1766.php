<?php $__empty_1 = true; $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="col-lg-6">
    <div class="member d-flex align-items-start mt-4">
      <div class="member-info">
        <h4><?php echo e($request->document->name ?? ''); ?></h4>
        <span><?php echo e($request->created_at->diffForHumans()); ?></span>
        <div class="row">
          <div class="col-12">
            <table class="table">
              <tbody>
                <tr>
                  <th>Request Tracking Number:</th>
                  <td class="text-dark"><?php echo e($request->request_number ?? ''); ?></td>
                </tr>
                <tr>
                  <th>Status:</th>
                  <td class="<?php echo e($request->status == 'PENDING' ? 'text-warning' : ''); ?>  <?php echo e($request->status == 'APPROVED' ? 'text-success' : ''); ?> <?php echo e($request->status == 'COMPLETED' ? 'text-primary' : ''); ?> <?php echo e($request->status == 'CANCELLED' || $request->status == 'DECLINED' ? 'text-danger' : ''); ?>"><?php echo e($request->status); ?></td>
                </tr>
                <tr>
                  <th>Claiming Option:</th>
                  <td class="text-uppercase"><?php echo e($request->claiming_option ?? ''); ?></td>
                </tr>
                <tr>
                  <th>Tentative Claiming Date:</th>
                  <td>
                    <?php if($request->claiming_date != ''): ?>
                      <?php echo e(\Carbon\Carbon::createFromFormat('Y-m-d',$request->claiming_date)->format('M j , Y')); ?>

                    <?php else: ?>
                      N/A
                    <?php endif; ?>
                  </td>
                </tr>
                <tr>
                  <th>Downloadable File:</th>
                  <td>
                    <?php if($request->downloadable != ''): ?>
                      <a href="/resident/downloadable_file/<?php echo e($request->downloadable); ?>"><?php echo e($request->downloadable); ?></a>
                    <?php else: ?>
                      N/A
                    <?php endif; ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-6">
            <p>
              <a id="messages_count<?php echo e($request->id); ?>" class="link-primary" data-toggle="collapse" href="#collapseExample<?php echo e($request->id); ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                <?php echo e($request->messages()->count()); ?>  Message<?php echo e($request->messages()->count() == 0 ? '':'s'); ?> 
              </a>
            </p>
          </div>
          <div class="col-6 text-right">
            <?php if($request->status == 'PENDING'): ?>
              <a href="#" class="btn btn-sm btn-primary edit text-uppercase" edit="<?php echo e($request->id); ?>">Edit</a>
              <a href="#" class="btn btn-sm btn-danger cancel text-uppercase" cancel="<?php echo e($request->id); ?>">Cancel</a>
            <?php endif; ?>
          </div>
        </div>
        <div class="collapse mt-3" id="collapseExample<?php echo e($request->id); ?>">
            <div class="card card-body text-left">
                <form method="post" class="myMsgForm">
                    <?php echo csrf_field(); ?>
                    <div class="input-group">
                        <input type="text" class="form-control msg" name="message" placeholder="Enter a message" required>
                        <input type="hidden" class="form-control" name="request_id" value="<?php echo e($request->id); ?>">
                        <div class="input-group-append">
                            <span class="input-group-text"><button  type="submit" class="btn text-primary" style="background-color:transparent;" ><i class="ri-send-plane-2-fill"></i></button></span>
                            
                        </div>
                    </div>
                </form>
                <div id="msg_section<?php echo e($request->id); ?>">
                    <?php if($request->messages()->count() < 1): ?>
                    <hr>
                          <b> NO MESSAGE FOUND</b>  <br>
                    <?php else: ?>
                      <?php $__currentLoopData = $request->messages()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <hr>
                          <b> <?php echo e($msg->user->name ?? $msg->user->resident->first_name .' '. $msg->user->resident->last_name); ?></b>  <br>
                          <h6><?php echo e($msg->message ?? ''); ?></h6> <br>
                          <small class="mb-0"><?php echo e($msg->created_at->diffForHumans()); ?></small>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
      </div>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
  <div class="col-lg-6 mx-auto">
    <div class="member d-flex align-items-start mt-4" >
      <div class="member-info">
        <h4>No data available</h4>
      </div>
    </div>
  </div>
<?php endif; ?>


<script> 
  $(document).ready(function(){
    $('.myMsgForm').on('submit', function(event){
        event.preventDefault();

        $.ajax({
            url: "/resident/message",
            method:"POST",
            data:$(this).serialize(),
            dataType:"json",
            beforeSend:function(){

            },
            success:function(data){
                var messages = '';
                $.each(data.messages, function(key,value){
                    messages += '<hr>';
                    messages += '<b>'+value.name+'</b> <br>';
                    messages += '<h6>'+value.msg+'</h6> <br>';
                    messages += '<h6>'+value.date_time+'</h6> <br>';
                                  
                });
                $('#msg_section'+data.request_id).empty().append(messages);
                $('.msg').val('');
                $('#messages_count'+data.request_id).text(data.msg_count)
            }
        });
    });
  });
</script> 
   
<?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/resident/requested/requested-data.blade.php ENDPATH**/ ?>