
<?php $__env->startSection('sub-title','MANAGE REQUESTED SERVICE'); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $__env->make('../partials.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('../partials.admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<style>
  .fixed-plugin.show .card {
    right: 0;
  }
  .fixed-plugin .card {
    right: -760px;
    width: 760px;
  }

  .fixed-plugin1.show .card {
    right: 0;
  }
  .fixed-plugin1 .card {
    right: -760px;
    width: 760px;
  }

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">
  <div class="row mt-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-md-10">
                <h6>MANAGE REQUESTED SERVICES</h6>
                </div>
                <div class="col-md-2">
                    <select id="filter_status" class="form-control" style="appearance: button;">
                         <option value="">FILTER STATUS</option>
                         <option value="PENDING">PENDING</option>
                         <option value="APPROVED">APPROVED</option>
                         <option value="COMPLETED">COMPLETED</option>
                         <option value="DECLINED">DECLINED</option>
                         <option value="CANCELLED">CANCELLED</option>
                    </select>
                </div>
                </div>
           
          </div>
          <div class="card-body ">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-secondary opacity-7"></th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Request Number</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Payment</th>
                    <!-- <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Status</th> -->
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Resident</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Service</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Tentative Claiming Date</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Requirements</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Claiming Option</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Amount To Pay</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Requested At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button id="<?php echo e($document->id); ?>" class="btn btn-info btn-sm msg" >
                              <?php echo e($document->messages()->count()); ?>  MESSAGE<?php echo e($document->messages()->count() == 0 ? '':'S'); ?> 
                            </button>
                            <button id="<?php echo e($document->id); ?>" class="btn btn-primary btn-sm view" >
                              VIEW/EDIT
                            </button>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm text-primary"><?php echo e($document->request_number ?? ''); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <span class="badge badge-sm <?php echo e($document->isPaid == 1 ? 'bg-gradient-success' : 'bg-gradient-danger'); ?>">
                              <?php echo e($document->isPaid == 1 ? 'Paid' : 'Unpaid'); ?>

                            </span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <span class="badge badge-sm <?php echo e($document->status == 'PENDING' ? 'bg-gradient-warning' : ''); ?>  <?php echo e($document->status == 'APPROVED' ? 'bg-gradient-success' : ''); ?> <?php echo e($document->status == 'COMPLETED' ? 'bg-gradient-primary' : ''); ?> <?php echo e($document->status == 'CANCELLED' || $document->status == 'DECLINED' ? 'bg-gradient-danger' : ''); ?>"><?php echo e($document->status); ?></span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($document->resident->first_name ?? ''); ?> <?php echo e($document->resident->last_name ?? ''); ?>  (<?php echo e($document->resident->middle_name ?? 'n/a'); ?>)</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($document->document->name ?? ''); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($document->claiming_date ?? 'N/A'); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs font-weight-bold mb-0">
                              <?php $__currentLoopData = $document->document->requirements()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($requirement->name); ?> <br>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <span class="badge badge-sm bg-gradient-success"><?php echo e($document->claiming_option  ?? ''); ?></span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"></h6>
                            <p class="text-xs font-weight-bold mb-0">
                              ₱ <?php echo e($document->amount_to_pay ?? ''); ?>

                              <a href="/resident/receipt/<?php echo e($document->receipt ?? ''); ?>" target="_blank" class="link-primary"> <br>
                               View Receipt</a>
                            </p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($document->created_at->format('M j , Y h:i A') ?? ''); ?></h6>
                         
                          </div>
                        </div>
                      </td>
                      
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

<?php $__env->startSection('rightbar'); ?>
<div class="fixed-plugin">
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 ">
      
      <div class="float-end mt-2">
        <button class="btn btn-link text-danger p-0 fixed-plugin-close-button">
          <i class="fa fa-close"></i>
        </button>
      </div>
      <br>
      <div class="float-start">
        <h6 class="text-uppercase">REQUESTED SERVICE INFORMATION</h6>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
    <div class="overflow-auto">
        <form method="post" id="myForm" class="contact-form">
              <?php echo csrf_field(); ?>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label text-uppercase" >Payment <span class="text-danger">*</span></label>
                        <select name="payment" id="payment" class="form-control" style="appearance: searchfield;">
                            <option value="1">PAID</option>
                            <option value="0">UNPAID</option>
                        </select>
                    </div>
                  </div>
                  <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label text-uppercase" >Status <span class="text-danger">*</span></label>
                        <select name="status" id="status" class="form-control" style="appearance: searchfield;">
                            <option value="PENDING">PENDING</option>
                            <option value="APPROVED">APPROVED</option>
                            <option value="COMPLETED">COMPLETED</option>
                            <option value="DECLINED">DECLINED</option>
                    </div>
                  </div> -->
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label text-uppercase" >Resident</label>
                        <input type="text" name="resident" id="resident" class="form-control" readonly />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label text-uppercase" >Service</label>
                        <input type="text" name="document" id="document" class="form-control" readonly />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label text-uppercase" >Tentative Claiming Date <span class="text-danger">*</span></label>
                        <input type="date" name="claiming_date" id="claiming_date" class="form-control"/>
                        <span class="invalid-feedback" role="alert">
                            <strong id="error-claiming_date"></strong>
                        </span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label text-uppercase" >Claimed Option</label>
                        <input type="text" name="claimed_option" id="claimed_option" class="form-control" readonly/>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label text-uppercase" >Downloadable File</label>
                              <input type="file" name="downloadable_file" id="downloadable_file" class="form-control"  />
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label text-uppercase" >Current File</label>
                                  <ul class="list-group">
                                    <a href="#" class="text-primary" id="current_file" target="_blank"></a>
                                  </ul>
                            </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label text-uppercase" >Requirements</label>
                              <ul class="list-group" id="requirement_list">
                              </ul>
                            
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label text-uppercase" >Uploaded Requirements</label>
                                <ul class="list-group" id="uploaded_requirement">
                                </ul>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                              <label class="control-label text-uppercase" >Amount To Pay</label>
                              <input type="text" name="amount_to_pay" id="amount_to_pay" class="form-control" readonly/>
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label text-uppercase" >Uploaded Receipt</label>
                                  <ul class="list-group">
                                    <a href="#" class="text-primary" id="uploaded_receipt" target="_blank"></a>
                                  </ul>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
              
              
            
                  <div class="card-footer text-center">
                      <input type="submit" name="action_button" id="action_button" class="text-uppercase btn-wd btn btn-primary" value="Submit" />
                  </div>
              </div>
        </form>
    </div>
  </div>
</div>

<div class="fixed-plugin1">
  <div class="card shadow-lg">
    <div class="card-header pb-0 pt-3 ">
      
      <div class="float-end mt-2">
        <button class="btn btn-link text-danger p-0 fixed-plugin-close-button1">
          <i class="fa fa-close"></i>
        </button>
      </div>
      <br>
      <div class="float-start">
        <h6 class="text-uppercase title_head"></h6>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
        <div class="overflow-auto">
            <form method="post" id="myMsgForm" class="contact-form">
                <?php echo csrf_field(); ?>

                  <div class="form-group">
                    <input type="text" class="form-control" id="message" name="message" placeholder="Enter a message" required>
                    <small class="text-primary" id="warning_text"></small>
                  </div>
                  <div class="form-group">
                    <ul class="list-group" id="msg_section">
                    
                    </ul>
                  </div>
            </form>
        </div>
    </div>
  </div>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('script'); ?>

<script>
  $(document).ready(function () {
        var table = $('.table').DataTable({
            'columnDefs': [{ 'orderable': false, 'targets': [0] }],
        });

        $('#filter_status').on('change', function () {
            table.columns(3).search( this.value ).draw();
        });
  });

  var id = null;
  $(document).on('click', '.view', function(){
      id = $(this).attr('id');

      $.ajax({
              url :"/admin/requested_documents/"+id,
              dataType:"json",
              method:"get",
              beforeSend:function(){
                $("#action_button").attr("disabled", true);
              },
              success:function(data){
                $("#action_button").attr("disabled", false);

                $('#resident').val(data.resident)
                $('#document').val(data.document)
                $('#claiming_date').val(data.claiming_date);
                $('#claimed_option').val(data.claimed_option);
                $('#payment').val(data.payment);
                $('#status').val(data.status);

                

                var requirement = '';
                $.each(data.requirement, function(key,value){
                    requirement += '<li class="list-group-item">'+value.name+'</li>';
                });
                $('#requirement_list').empty().append(requirement);

                var uploaded_requirement = '';
                $.each(data.uploaded_requirement, function(key,value){
                    uploaded_requirement += '<a href="/resident/requirements/'+value.name+'" class="text-primary" target="_blank">'+value.name+'</a>';
                });
                $('#uploaded_requirement').empty().append(uploaded_requirement);

                $('#amount_to_pay').val(data.amount_to_pay)
                $('#uploaded_receipt').attr('href','/resident/receipt/'+ data.uploaded_receipt);
                $('#uploaded_receipt').text(data.uploaded_receipt);

                $('#current_file').attr('href','/resident/downloadable_file/'+ data.downloadable);
                $('#current_file').text(data.downloadable);
              }
      });
     
      var fixedPlugin = document.querySelector('.fixed-plugin');
      var fixedPlugin1 = document.querySelector('.fixed-plugin1');

      if (!fixedPlugin.classList.contains('show')) {
          fixedPlugin.classList.add('show');
          fixedPlugin1.classList.remove('show');
      } else {
          fixedPlugin.classList.remove('show');
      }
  });

  $('#myForm').on('submit', function(event){
    event.preventDefault();
    $('.form-control').removeClass('is-invalid')

    $.ajax({
        url: '/admin/requested_documents/'+id,
        method:'POST',
        data:  new FormData(this),
        contentType: false,
        cache: false,
        processData: false,

        dataType:"json",
        beforeSend:function(){
            $("#action_button").attr("disabled", true);
            $("#action_button").val("Submitting");
        },
        success:function(data){
            $("#action_button").attr("disabled", false);
            $("#action_button").val("Submit");
            
            if(data.errors){
                $.each(data.errors, function(key,value){
                    if(key == $('#'+key).attr('id')){
                        $('#'+key).addClass('is-invalid')
                        $('#error-'+key).text(value)
                    }
                })
            }
           if(data.success){
                $.confirm({
                    title: data.success,
                    content: "",
                    type: 'green',
                    buttons: {
                        confirm: {
                            text: '',
                            btnClass: 'btn-green',
                            keys: ['enter', 'shift'],
                            action: function(){
                                location.reload();
                            }
                        },
                    }
                });
            }
           
        }
    });
  });


  var request_id = null;
  $(document).on('click', '.msg', function(){
        var fixedPlugin = document.querySelector('.fixed-plugin1');
        var fixedPlugin1 = document.querySelector('.fixed-plugin');

        if (!fixedPlugin.classList.contains('show')) {
            fixedPlugin.classList.add('show');
            fixedPlugin1.classList.remove('show');
        } else {
            fixedPlugin.classList.remove('show');
        }  

      request_id = $(this).attr('id');
      $('#warning_text').text('')
      messages(request_id);
  });

  function messages(request_id){
    $.ajax({
            url :"/admin/message/"+request_id,
            dataType:"json",
            method:"get",
            beforeSend:function(){

            },
            success:function(data){
              if(data.no_msg){
                var messages = '';
                    messages += '<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">';
                      messages += '<div class="d-flex align-items-center">'
                        messages += '<div class="d-flex flex-column">'
                          messages += '<h6 class="mb-1 text-dark text-sm">'+data.no_msg+'</h6>'
                        messages += '</div>'
                      messages += '</div>'
                    messages += '</li>'
                    messages += '<hr>'
                $('#msg_section').empty().append(messages);
              }
              if(data.messages){
                var messages = '';
                $.each(data.messages, function(key,value){
                    messages += '<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">';
                      messages += '<div class="d-flex align-items-center">'
                        messages += '<div class="d-flex flex-column">'
                          messages += '<h6 class="mb-1 text-dark text-sm">'+value.name+'</h6>'
                          messages += '<p class="text-xs">'+value.msg+'</p>'
                          messages += '<small class="text-xs">'+value.date_time+'</small>'
                        messages += '</div>'
                      messages += '</div>'
                    messages += '</li>'
                    messages += '<hr>'
                });
                $('#msg_section').empty().append(messages);
              }

              $('.title_head').text(data.resident +' - '+ data.document)
            }
    });
  }

  $('#myMsgForm').on('submit', function(event){
    event.preventDefault();

    $.ajax({
        url :"/admin/message/"+request_id,
        method:"POST",
        data:$(this).serialize(),
        dataType:"json",
        beforeSend:function(){
          $('#warning_text').text('SENDING..')
        },
        success:function(data){
          if(data.success){
            $('#warning_text').text('SENT')
            $('#message').val('');
            messages(request_id)
          }
        }
    });
  });

$(document).on('click', '.btn-close', function(){
      $('#myMsgModal').modal('hide');
  });
  
  $(document).on('click', '.fixed-plugin-close-button1', function(){
        var fixedPlugin = document.querySelector('.fixed-plugin1');
            fixedPlugin.classList.remove('show');
    });

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/admin/manage_requested_documents.blade.php ENDPATH**/ ?>