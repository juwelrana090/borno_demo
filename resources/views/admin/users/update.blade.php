@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">User Edit</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">User Edit</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.update') }}" method="POST" >
                    @csrf

                    <input type="hidden" name="id" value="{{ $user->id }}">

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Enter name">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter email">
                            </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Username</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}" placeholder="Enter username">
                        </div>
                    </div>           

                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Role</label>
                        <div class="col-md-10">
                            <select class="form-select" name="role">
                                <option value="User" @if($user->role == 'User') {{ 'selected' }}  @endif>User</option>
                                <option value="Editor" @if($user->role == 'Editor') {{ 'selected' }}  @endif>Editor</option>
                                <option value="Admin" @if($user->role == 'Admin') {{ 'selected' }}  @endif>Admin</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('user.pchange') }}" method="POST" >
                    @csrf

                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="mb-3 row">
                        <label class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter Password">
                        </div>
                    </div> 

                    <div class="mb-3 row">
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end row -->


@endsection
