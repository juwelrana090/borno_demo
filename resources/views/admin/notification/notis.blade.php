@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Notification</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Notification</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-white bg-success">Add Notification</div>
            <div class="card-body">
                <form class="row g-3" action="{{ route('notis.create') }}" method="POST" >
                    @csrf
                    <div class="col-12 mb-2">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title">
                    </div>
                    <div class="col-12 mb-2">
                        <label class="form-label">Description</label>
                        <div>
                            <textarea class="form-control" name="description" placeholder="Enter Description" rows="5" required="" ></textarea>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status" >
                            <option value="Enabled" selected>Enabled</option>
                            <option value="Disabled">Disabled</option>
                        </select> 
                    </div>
                    <div class="col-12 mb-2">
                        <label class="form-label">Wait Time</label>
                        <input type="text" class="form-control" name="wait" placeholder="Enter Wait Time">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-white bg-secondary">Notification List</div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Wait Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($notis as $note)
                        <tr id="{{ $note->id }}">
                            <td>
                                {{ $note->id }}
                            </td>
                            <td>
                                {{ $note->title }} 
                            </td>
                            <td>
                                {{ $note->status }} 
                            </td>
                            <td>
                                {{ $note->wait }} 
                            </td>
                            <td> 
                                <a href="{{ route('notis.edit', $note->id) }}" class="btn btn-success btn-sm"><i class="mdi mdi-pencil-box-outline"></i></a>
                                <button class="btn btn-danger btn-sm remove"><i class="mdi mdi-trash-can"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center">{!! $notis->links('pagination::bootstrap-4') !!}</div>
        </div>
    </div>
</div>
<!-- end row -->

<?php 
    $del = route('home')."/fs-admin/notis/delete/";
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

