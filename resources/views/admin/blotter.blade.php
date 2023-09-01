@extends('../layouts.admin')
@section('sub-title','BLOTTERS')

@php
use Carbon\Carbon;
@endphp

@section('sidebar')
    @include('../partials.admin.sidebar')
@endsection

@section('navbar')
    @include('../partials.admin.navbar')
@endsection

@section('content')
<div class="container-fluid py-4">
  <div class="row mt-4">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <div class="row">
                <div class="col-md-10">
                    <h6>MANAGE BLOTTERS</h6>
                </div>
                @can('admin_access')
                  <div class="col-md-2">
                  <a href="{{ route('admin.blotter.create') }}" class="btn btn-primary">Add New Blotter</a>
                  </div>
                @endcan
                </div>
          </div>
          <div class="card-body ">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0" style="width: 100%;">
                <thead>
                  <tr>
                    <th class="text-secondary opacity-7"></th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Complainant</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Respondent</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Victim</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Type</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Location</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Date</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Time</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Details</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Status</th>
                    <th class="text-uppercase text-xxs text-dark font-weight-bolder opacity-7">Date Created</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($blotters as $blotter)
                    <tr>
                        <td>
                            <a href="{{ route('admin.blotter.edit', $blotter->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.blotter.destroy', $blotter->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this announcement?');">Delete</button>
                            </form>
                        </td>
                        <td>{{ $blotter->complainant }}</td>
                        <td>{{ $blotter->respondent }}</td>
                        <td>{{ $blotter->victim }}</td>
                        <td>{{ $blotter->type }}</td>
                        <td>{{ $blotter->location }}</td>
                        <td>{{ Carbon::parse($blotter->date)->format('F j, Y')}}</td>
                        <td>{{ Carbon::parse($blotter->time)->format('g:i a') }}</td>
                        <td>{{ $blotter->details }}</td>
                        <td>{{ $blotter->status }}</td>
                        <td>{{ $blotter->created_at->format('F j, Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
      @section('footer')
          @include('../partials.admin.footer')
      @endsection
  </div>
@endsection

</div>

@section('script')

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


@endsection