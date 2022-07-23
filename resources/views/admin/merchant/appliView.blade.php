
@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
<title>Application View | BornoBangla.com</title>
@endsection
@section('content')

<?php
    use App\Models\Category;
?>


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Application View</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Application View</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Merchant Application</h4>
                <p class="card-title-desc">Parsley is a javascript form validation
                    library. It helps you provide your users with feedback on their form
                    submission before sending it to your server.</p>

                <form class="custom-validation" action="{{ route('merchant.appUpdate') }}" method="POST">
                    @csrf

                    <input type="hidden" name="id" value="{{ $application->id }}">
                    <input type="hidden" name="user_id" value="{{ $application->user_id }}">
                    <input type="hidden" name="type" value="{{ $application->type }}">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <span class="form-control">{{ $application->name }}</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <span class="form-control">{{ $application->phone }}</span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-Mail</label>
                        <div>
                            <span class="form-control">{{ $application->email }}</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Merchant Type</label>
                        <div>
                            <span class="form-control">{{ $application->type }}</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <div>
                            <span class="form-control">{{ $application->description }}</span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div>
                            <select class="form-select" name="status">
                                <option value="Pending" <?php if($application->status == "Pending"){ echo "selected";}?>>Pending</option>
                                <option value="Approved" <?php if($application->status == "Approved"){ echo "selected";}?>>Approved</option>
                                <option value="Rejected" <?php if($application->status == "Rejected"){ echo "selected";}?>>Rejected</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Update
                            </button>
                            <a href="{{ route('admin.index') }}" type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> 




@endsection