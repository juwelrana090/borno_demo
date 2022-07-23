@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Manage License</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage License</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    
    <div class="col-md-12 p-4 justify-content-center text-center" id="mesSages"></div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">License Code</h4>
                <form class="custom-validation" action="{{ route('setting.updateLicense') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $license->id }}">

                    <div class="col-12 mb-2">
                        <label class="form-label">Client Username</label>
                        <input type="text" class="form-control" name="client_name" value="{{ $license->client_name }}" placeholder="Enter Client Username" required>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label">Client Email</label>
                        <input type="text" class="form-control" name="client_email" value="{{ $license->client_email }}" placeholder="Enter Client Email" required>
                    </div>
                    
                    <div class="col-12 mb-2">
                        <label class="form-label">License Code</label>
                        <input type="text" class="form-control" name="license_code" value="{{ $license->license_code }}" placeholder="Enter License Code" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">License Code Generator</h4>
                <form class="custom-validation"  name="Generator" id="Generator" method="post" action="javascript:void(0)">
                    @csrf

                    <div class="col-12 mb-2">
                        <label class="form-label">Envato Username </label>
                        <input type="text" class="form-control" name="client_name" placeholder="Enter Envato Username" required>
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label">Envato Email</label>
                        <input type="text" class="form-control" name="client_email" placeholder="Enter Envato Email" required>
                    </div>
                    
                    <div class="col-12 mb-2">
                        <label class="form-label">Envato Valid Purchase Code</label>
                        <input type="text" class="form-control" name="license_code" placeholder="Enter Purchase Code" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">Generator</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
<!-- end row -->


<script>
    if ($("#Generator").length > 0) {
        $("#Generator").validate({
            rules: {
                client_name: {
                    required: true,
                },
                client_email: {
                    required: true,
                },
                license_code: {
                    required: true,
                },
            },
            messages: {
                client_name: {
                    required: "Please enter valid email",
                },
                client_email: {
                    required: "Please enter valid email",
                },
                license_code: {
                    required: "Please enter valid email",
                },
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $('#submit').html('Please Wait...');
                $("#submit"). attr("disabled", true);
                $.ajax({
                    url: "{{ route('setting.LicenseGenerator') }}",
                    type: "POST",
                    data: $('#Generator').serialize(),
                    success: function( response ) {
                        $('#submit').html('Reset');
                        $("#submit"). attr("disabled", false);

                        $('#mesSages').html(response);
                        document.getElementById("Generator").reset(); 
                    }
                });
            }
        })
    }
</script>

@endsection
