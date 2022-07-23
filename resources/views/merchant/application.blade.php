@extends('layouts.my')
@section('custom')
<title>Merchant Application | BornoBangla.com</title>
@endsection
@section('content')
<?php 

    use App\Models\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\URL;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Redirect;


    $id = Auth::user()->id;
    $user = User::where('id', "=", $id)->first();
?>


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Merchant Application</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('My.Account') }}">Dashboard</a></li>
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
                <form class="custom-validation" action="{{ route('mer.applly') }}" method="POST">
                    @csrf

                    <input type="hidden" name="user_id" value="{{ $id }}">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required placeholder="Enter Name"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}" required placeholder="Enter Phone"/>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">E-Mail</label>
                        <div>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}"  placeholder="Enter Email"/>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Merchant Type</label>
                        <div>
                            <select class="form-select" name="type">
                                <option selected>Select Merchant Type</option>
                                <option value="Teacher">Teacher</option>
                                <option value="Agency">Agency</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <div>
                            <textarea required class="form-control" name="description" rows="5"></textarea>
                        </div>
                    </div>

                    <div>
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light me-1">
                                Submit
                            </button>
                            <a href="{{ route('My.Account') }}" type="reset" class="btn btn-secondary waves-effect">
                                Cancel
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> 
<!-- end row -->






@endsection
