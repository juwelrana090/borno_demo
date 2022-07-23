@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Manage Setting</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage Setting</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">File Storage FTP Server</h4>
                <form class="custom-validation" action="{{ route('setting.updateStorag') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $storage->id }}">

                    <div class="col-12 mb-2">
                        <label class="form-label">Download URL (https://example.com/files)</label>
                        <input type="text" class="form-control" name="ftp_down" value="{{ $storage->ftp_down }}" placeholder="Enter FTP Host">
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label">FTP Host (example.com)</label>
                        <input type="text" class="form-control" name="ftp_host" value="{{ $storage->ftp_host }}" placeholder="Enter FTP Host">
                    </div>
                    
                    <div class="col-12 mb-2">
                        <label class="form-label">FTP Username (example)</label>
                        <input type="text" class="form-control" name="ftp_user" value="{{ $storage->ftp_user }}" placeholder="Enter FTP Username">
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label">FTP Password (123456)</label>
                        <input type="text" class="form-control" name="ftp_pass" value="{{ $storage->ftp_pass }}" placeholder="Enter FTP Password">
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label">FTP Port (21)</label>
                        <input type="text" class="form-control" name="ftp_port" value="{{ $storage->ftp_port }}" placeholder="Enter FTP Port">
                    </div>

                    <div class="col-12 mb-2">
                        <label class="form-label">FTP Root Location (/public_html/files)</label>
                        <input type="text" class="form-control" name="ftp_root" value="{{ $storage->ftp_root }}" placeholder="Enter FTP Root Location">
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
        <div class="card mb-2">
            <div class="card-body">
                <h4 class="card-title">Download Wating Time (seconds)</h4>
                <form class="custom-validation" action="{{ route('setting.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $setting->id }}">
                    <div class="mb-3">
                        <input type="number" class="form-control" name="value" value="{{ $setting->value }}">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">File Storage Limit ( 1 MB / 1 GB )</h4>
                <form class="custom-validation" action="{{ route('setting.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $limit->id }}">

                    <div class="mb-3">
                        <input type="text" class="form-control" name="value" value="{{ $limit->value }}">
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
</div>
<!-- end row -->




@endsection
