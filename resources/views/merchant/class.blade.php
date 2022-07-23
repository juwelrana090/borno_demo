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

            </div>
        </div>
    </div> <!-- end col -->
</div> 
<!-- end row -->






@endsection
