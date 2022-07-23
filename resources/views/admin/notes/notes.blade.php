@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Manage Notes</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Manage Notes</li>
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
                <h4 class="card-title">1st Note</h4>
                <form class="custom-validation" action="{{ route('note.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $note1->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="description"><?= $note1->description; ?></textarea>
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
                <h4 class="card-title">2nd Note</h4>
                <form class="custom-validation" action="{{ route('note.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $note2->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="description"><?= $note2->description; ?></textarea>
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
                <h4 class="card-title">3th Note</h4>
                <form class="custom-validation" action="{{ route('note.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $note3->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="description"><?= $note3->description; ?></textarea>
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
                <h4 class="card-title">4th Note</h4>
                <form class="custom-validation" action="{{ route('note.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $note4->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="description"><?= $note4->description; ?></textarea>
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
                <h4 class="card-title">5th Note</h4>
                <form class="custom-validation" action="{{ route('note.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $note5->id }}">

                    <div class="mb-3">
                        <textarea required="" class="form-control" rows="5" name="description"><?= $note5->description; ?></textarea>
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
