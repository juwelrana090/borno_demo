@extends('layouts.admin')
@section('custom')
<!-- Custom styles for this template -->
@endsection
@section('content')


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Edit Page</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Edit Page</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title">{{ $page->title }}</h2>
                <form action="{{ route('page.update') }}" method="POST">
                    @csrf
                
                    <input type="hidden" name="id" value="{{ $page->id }}">

                    <textarea id="elm1" name="description">{{ $page->description }}</textarea>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<!--tinymce js-->
<script src="{{ asset('admin/assets/libs/tinymce/tinymce.min.js') }}"></script>

<!-- init js -->
<script src="{{ asset('admin/assets/js/pages/form-editor.init.js') }}"></script>

@endsection
