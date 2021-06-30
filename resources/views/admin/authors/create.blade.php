@extends('layouts.admin')
@section('title', 'Create Author')
@section('content')
<div class="content">
    <div class="pure-g">
        <div class="pure-u-1">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Form controls</strong>
                </div>
                <form action="{{route('authors.store')}}" enctype="multipart/form-data" method="POST">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                    <small class="text-danger">@error('name') {{$message}}
                                        @enderror</small>
                                </div>
                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="customFile">Picture</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" required>
                                        <label class="custom-file-label" for="picture">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="2" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('authors.index')}}" class="m-1 btn btn-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{secure_asset('css/app-light.css')}}">
@endpush