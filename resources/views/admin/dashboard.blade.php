@extends('layouts.admin')
@section('custom')
<title>My Account | BornoBangla.com</title>
@endsection
@section('content')
<?php 

    use App\Models\Category;

    function count_format($n)
    {
        if ($n < 1000) return $n;
        $suffix = ['','k','M','G','T','P','E','Z','Y'];
        $power = floor(log($n, 1000));
        return round($n/(1000**$power),1,PHP_ROUND_HALF_EVEN).$suffix[$power];
    };
?>

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->


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

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-grow-1">
                        <h5 class="card-title">Views</h5>
                    </div>
                </div>
                <div>
                    <div id="mixed-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
            <!-- end card-body -->

            <div class="card-body border-top">
                <div class="text-muted text-center">
                    <div class="row">
                        <div class="col-4 border-end">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-primary me-1"></i> Today Views</p>
                                <h5 class="font-size-16 mb-0"><span class="text-success"> <?php echo  count_format($day2viw); ?></span></h5>
                            </div>
                        </div>
                        <div class="col-4 border-end">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-warning me-1"></i> Last 7 Days Views</p>
                                <h5 class="font-size-16 mb-0"><span class="text-success"> <?php echo  count_format($day7viw); ?></span></h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div>
                                <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-danger me-1"></i> Total Views</p>
                                <h5 class="font-size-16 mb-0"><span class="text-success"> <?php echo  count_format($totalvew); ?></span></h5>
                            </div>
                        </div>
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


@endsection
