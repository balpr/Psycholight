@extends('layouts.admin')
@section('title', 'Edit Category')
@section('content')
<div class="content">
    <div class="pure-g">
        <div class="pure-u-1">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Form controls</strong>
                </div>
                <form action="{{route('categories.update', [$category->id])}}" method="POST">
                    @CSRF
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="title">Name</label>
                                    <input type="text" title="name" name="name" class="form-control" maxlength="20" value="{{$category->name}}" required>
                                </div>
                            </div> <!-- /.col -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('categories.index')}}" class="m-1 btn btn-danger">Back</a>
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
<link rel="stylesheet" href="{{asset('css/app-light.css')}}">
@endpush