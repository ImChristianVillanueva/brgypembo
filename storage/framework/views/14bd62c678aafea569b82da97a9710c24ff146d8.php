
<?php $__env->startSection('sub-title','MANAGE SERVICES'); ?>

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
                    <h6>MANAGE SERVICES</h6>
                </div>
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_access')): ?>
                  <div class="col-md-2">
                      <button class="btn btn-dark btn-sm" id="create_record">
                          ADD NEW SERVICE
                      </button>
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
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Name</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Amount</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Requirements</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Is Available</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Created At</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <button id="<?php echo e($document->id); ?>" class="btn btn-primary btn-sm view" >
                              VIEW/EDIT
                            </button>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo e($document->name ?? ''); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">₱ <?php echo e($document->amount ?? ''); ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-xs font-weight-bold mb-0">
                              <?php $__currentLoopData = $document->requirements()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requirement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e($requirement->name); ?> <br>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </h6>
                          </div>
                        </div>
                      </td>
                      <td  class="align-middle text-center text-sm">
                          <span class="badge badge-sm <?php echo e($document->isAvailable == '1'  ? 'bg-gradient-success' : 'bg-gradient-danger'); ?>">
                            <?php echo e($document->isAvailable == '1' ? 'YES':'NO'); ?>

                          </span>
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
        <h6 class="text-uppercase">SERVICE INFORMATION</h6>
      </div>
      <!-- End Toggle Button -->
    </div>
    <hr class="horizontal dark my-1">
    <div class="overflow-auto">
        <form method="post" id="myForm" class="contact-form">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label class="control-label text-uppercase" >Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" id="name" class="form-control" />
                    <span class="invalid-feedback" role="alert">
                        <strong id="error-name"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label class="control-label text-uppercase" >Amount <span class="text-danger">*</span></label>
                    <input type="number" name="amount" id="amount" class="form-control" />
                    <span class="invalid-feedback" role="alert">
                        <strong id="error-amount"></strong>
                    </span>
                </div>
                <div class="form-group">
                    <label class="control-label text-uppercase" >Is Available <span class="text-danger">*</span></label>
                    <select name="isAvailable" id="isAvailable" class="form-control" style="appearance: searchfield;">
                        <option value="1">YES</option>
                        <option value="0">NO</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label text-uppercase" >Requirements <span class="text-danger">*</span></label>
                        <div id="section_requirements" style="height:400px; overflow-y: auto; overflow-x: hidden;">
                            <div class="parentContainer">
                                <div class="row childrenContainer">
                                    <div class="col-8">
                                        <input type="text"  name="requirement[]" class="form-control" required/>
                                    </div>
                                    <div class="col-4">
                                            <button type="button" name="addParent" id="addParent" class="addParent btn btn-success">            
                                                <i class="fas fa-plus-circle"></i>        
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <input type="hidden" name="id" id="id"  />
                <input type="hidden" name="action" id="action" value="ADD"  />

                <div class="card-footer text-center">
                    <input type="submit" name="action_button" id="action_button" class="text-uppercase btn-wd btn btn-primary" value="Submit" />
                </div>
            </div>
            
        </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('script'); ?>

<script>
  $(document).ready(function () {
    $('.table').DataTable({
        bDestroy: true,
        "bFilter": true,
        'columnDefs': [{ 'orderable': false, 'targets': [0] }],
       
    });
    

    $(document).on('click', '#create_record', function(){
        $('#name').focus();
        $('#action').val('ADD');
        $('.form-control').removeClass('is-invalid')
        $('#myForm')[0].reset();
        var requirements = "";
            requirements += '<div class="parentContainer">';
                requirements += '<div class="row childrenContainer">';
                    requirements += '<div class="col-8">';
                    requirements += '<input type="text" name="requirement[]" class="form-control" value="" required/>';
                    requirements += '</div>';
                    requirements += '<div class="col-4">';
                            requirements +=  '<button type="button" name="addParent" id="addParent" class="addParent btn btn-primary">';            
                                requirements +=  '<i class="fas fa-plus-circle"></i>';     
                            requirements +=  '</button>';
                    requirements += '</div>';
                requirements += '</div>';
            requirements += '</div>';
        $('#section_requirements').empty().append(requirements);

        var fixedPlugin1 = document.querySelector('.fixed-plugin1');
        if (!fixedPlugin1.classList.contains('show')) {
            fixedPlugin1.classList.add('show');
        } else {
            fixedPlugin1.classList.remove('show');
        }
     });

     $(document).on('click', '.fixed-plugin-close-button1', function(){
        var fixedPlugin1 = document.querySelector('.fixed-plugin1');
            fixedPlugin1.classList.remove('show');
    });

    $(document).on('click', '.addParent', function () {
        var html = '';
        html += '<div class="parentContainer">';
            html += '<div class="row childrenContainer">';
                html += '<div class="col-8">';
                html += '<input type="text" name="requirement[]" class="form-control" required/>';
                html += '</div>';
                html += '<div class="col-4">';
                    html += '<button type="button" class="btn btn-danger removeParent">';
                        html += '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
                    html += '</button>';
                html += '</div>';
            html += '</div>';
        html += '</div>';
        $(this)
            .parent()
            .parent()
            .parent()
            .parent()
            .append(html);
    
    });
    $(document).on('click', '.removeParent', function () {
        $(this).closest('#inputFormRow').remove();
        $(this).parent().parent().parent().remove();
    });

    
    $(document).on('click', '.view', function(){
      var id = $(this).attr('id');
      $('#action').val('EDIT');
      $('#id').val(id);

      $.ajax({
          url :"/admin/documents/"+id+"/edit",
          dataType:"json",
          beforeSend:function(){
              $("#action_button").attr("disabled", true);
          },
          success:function(data){
              $("#action_button").attr("disabled", false);
              $.each(data.result, function(key,value){
                  if(key == $('#'+key).attr('id')){
                      $('#'+key).val(value)
                  }
              })
              var requirements = "";
              $.each(data.requirements, function(key,value){
                    requirements += '<div class="parentContainer">';
                        requirements += '<div class="row childrenContainer">';
                            requirements += '<div class="col-8">';
                            requirements += '<input type="text" name="requirement[]" class="form-control" value="'+value.name+'" required/>';
                            requirements += '</div>';
                            requirements += '<div class="col-4">';
                                if (key === 0) {
                                    requirements +=  '<button type="button" name="addParent" id="addParent" class="addParent btn btn-primary">';            
                                        requirements +=  '<i class="fas fa-plus-circle"></i>';     
                                    requirements +=  '</button>';
                                }else{
                                    requirements += '<button type="button" class="btn btn-danger removeParent">';
                                        requirements += '<i class="fa fa-minus-circle" aria-hidden="true"></i>';
                                    requirements += '</button>';
                                }
                            requirements += '</div>';
                        requirements += '</div>';
                    requirements += '</div>';
              })
              $('#section_requirements').empty().append(requirements);
          }
      })

      var fixedPlugin1 = document.querySelector('.fixed-plugin1');

      if (!fixedPlugin1.classList.contains('show')) {
          fixedPlugin1.classList.add('show');
      } else {
          fixedPlugin1.classList.remove('show');
      }
    });

    $('#myForm').on('submit', function(event){
        event.preventDefault();
        $('.form-control').removeClass('is-invalid')
        var url = "/admin/documents";
        var method = "POST";

        if($('#action').val() == 'EDIT'){
        var id = $('#id').val();
            url = "/admin/documents/" + id;
            method = "PUT";
        }
        $.ajax({
            url: url,
            method: method,
            data: $(this).serialize(),
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


  });
  
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\brgypembo\resources\views/admin/manage_documents.blade.php ENDPATH**/ ?>