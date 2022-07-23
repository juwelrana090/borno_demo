@extends('layouts.my')
@section('custom')
<title>Class List | BornoBangla.com</title>
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
            <h4 class="mb-sm-0">Class List</h4>

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
    
    @foreach ($classes as $class)
    <div class="col-sm-6 col-md-4 col-xl-3">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{ asset('images/'.$class->image) }}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title ">{{$class->name}}</h4>
                <p class="card-text">{{$class->class}}</p>
            </div>
        </div>
    </div>
    @endforeach

</div> 
<!-- end row -->






@endsection
