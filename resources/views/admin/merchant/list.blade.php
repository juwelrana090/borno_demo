
@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
<title>Merchant List | BornoBangla.com</title>
@endsection
@section('content')

<?php
    use App\Models\Category;
?>


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Merchant List</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Merchant List</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12 col-lg-12">
        <div class="card">
            <div class="card-header bg-dark border-success">
                <h4 class="card-title text-light"><i class="mdi mdi-folder-multiple-outline"></i> User List</h4>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Name </th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr id="{{ $user->id }}">
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->phone }}
                            </td>
                            <td> 
                                {{ $user->email }}
                            </td>
                            <td> 
                                {{ $user->type }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<?php 
    $del = route('home')."/fs-admin/user/delete/";
?>

<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
    
       swal({
          title: 'Are you sure?',
          text: "It will be Delete Now!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Delete it!',
          showLoaderOnConfirm: true,
        },

      function(isConfirm) {
        if (isConfirm) {
          $.ajax({
              url: "<?= $del; ?>"+id,
              headers: {'X-Requested-With': 'XMLHttpRequest'},
              success: function(data) {
                $("#"+id).remove();
                  swal("Deleted!", "Your imaginary file has been deleted.", "success");
             }
          });
        } else {
          swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
      });
     
    });
</script>
 


@endsection