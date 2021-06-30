@extends('layouts.admin')
@section('title', 'Create Blog')
@section('content')
<div class="content">
    <div class="pure-g">
        <div class="pure-u-1">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Form controls</strong>
                </div>
                <form action="{{route('blogs.store')}}" enctype="multipart/form-data" method="POST">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                            </div> <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="author">Author</label>
                                    <select name="author_id" id="author_id" class="form-control">
                                        @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{$author->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="customFile">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="picture" name="picture" required>
                                        <label class="custom-file-label" for="picture">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" name="is_published" value="1" class="custom-control-input" id="customSwitch1">
                                        <label class="custom-control-label" for="customSwitch1">Is Published</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" name="content" id="content" rows="4" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{route('blogs.index')}}" class="m-1 btn btn-danger">Back</a>
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