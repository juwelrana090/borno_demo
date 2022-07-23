@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Ads Manager</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Ads Manager</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pop Ads</h4>
                <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $ads1->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads1->adscode; ?></textarea>
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
                <h4 class="card-title">Top Ads 728 x 90</h4>
                <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $ads2->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads2->adscode; ?></textarea>
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
                <h4 class="card-title">Buttom Ads 728 x 90</h4>
                <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $ads3->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads3->adscode; ?></textarea>
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
                <h4 class="card-title">Left Ads 300 x 250</h4>
                <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $ads4->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads4->adscode; ?></textarea>
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
                <h4 class="card-title">Right Ads 300 x 250</h4>
                <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $ads5->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads5->adscode; ?></textarea>
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
            <h4 class="card-title">Banner Ads 468 x 60</h4>
            <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                @csrf
            
                <input type="hidden" name="id" value="{{ $ads6->id }}">

                <div class="mb-3">
                    <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads6->adscode; ?></textarea>
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
            <h4 class="card-title">Fly Ads</h4>
            <form class="custom-validation" action="{{ route('ads.update') }}" method="POST">
                @csrf
            
                <input type="hidden" name="id" value="{{ $ads7->id }}">

                <div class="mb-3">
                    <textarea required="" class="form-control" rows="5" name="adscode"><?= $ads7->adscode; ?></textarea>
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
