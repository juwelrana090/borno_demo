@extends('layouts.my')
@section('custom')
<title>My Account | BornoBangla.com</title>
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

    function count_format($n)
    {
        if ($n < 1000) return $n;
        $suffix = ['','k','M','G','T','P','E','Z','Y'];
        $power = floor(log($n, 1000));
        return round($n/(1000**$power),1,PHP_ROUND_HALF_EVEN).$suffix[$power];
    };
?>

<?php if($user->role == 'User'){ ?>
<div class="row">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>Do you want to join as a merchant?</strong> Fill out the merchant application. <a href="{{ route('application') }}" class="btn btn-success waves-effect waves-light">Apply Now</a>
    </div>
</div>
<?php } ?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('My.Account') }}">Dashboard</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->



<?php if($user->role == 'User'){ ?>
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Users</p>
                        <h5 class="mb-3">2.2k</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.02% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-2" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Views per minute</p>
                        <h5 class="mb-3">50</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 1.7% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Bounce Rate</p>
                        <h5 class="mb-3">24.03 %</h5>
                        <p class="text-truncate mb-0"><span class="text-danger me-2"> 0.01% <i class="ri-arrow-right-down-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>                                        
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0  me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                <i class="ri-group-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">New Visitors</p>
                        <h5 class="mb-3">435</h5>
                        <p class="text-truncate mb-0"><span class="text-success me-2"> 0.01% <i class="ri-arrow-right-up-line align-bottom ms-1"></i></span> From previous</p>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php } ?>


<?php if($user->role == 'Merchant'){ ?>
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Current Balance</p>
                        <h5 class="mb-3">1k</h5>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-2" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Total Withdrawal</p>
                        <h5 class="mb-3">2k</h5>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0 me-3 align-self-center">
                        <div id="radialchart-3" class="apex-charts" dir="ltr"></div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Class Success</p>
                        <h5 class="mb-3">24.03 %</h5>
                    </div>
                </div>                                        
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex text-muted">
                    <div class="flex-shrink-0  me-3 align-self-center">
                        <div class="avatar-sm">
                            <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                <i class="ri-group-line"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1 overflow-hidden">
                        <p class="mb-1">Views</p>
                        <h5 class="mb-3">435</h5>
                    </div>
                </div>
            </div>
            <!-- end card-body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<?php } ?>




@endsection
