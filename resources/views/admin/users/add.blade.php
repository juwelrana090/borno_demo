@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Add New User</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Add New User</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.create') }}" method="POST" >
                    @csrf

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter name">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                            </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                    </div>                

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                    </div> 

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Role</label>
                        <div class="col-md-10">
                            <select class="form-select" name="role">
                                <option value="User">User</option>
                                <option value="Editor">Editor</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


@endsection
