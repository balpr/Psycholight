@extends('layouts.admin')
@section('title', 'Blogs')
@section('content')
<div class="content">
    <a href="{{route('blogs.create')}}" class="btn btn-success" style="background: rgb(28, 184, 65);margin-bottom: 12px;margin-top: 12px;text-decoration:none">Insert</a>
    <a href="{{route('user.blog')}}" class="btn btn-primary" target="_blank">View</a>

    <div class="pure-g">
        <div class="pure-u-1">
            <table class="table datatables" id="table" style="width: 100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Picture</th>
                        <th>Content</th>
                        <th>Categories</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr class="pure-table-odd">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $blog->title }}</td>
                        <td><a href="{{ $blog->picture }}" target="_blank">image</a></td>
                        <td>{{ $blog->content }}</td>
                        <td>@foreach($blog->categories as $category) {{ $category->name }} @endforeach</td>
                        <td>{{ $blog->authors->name }}</td>
                        <td>
                            @if($blog->is_published == 1)
                            <a class="btn btn-sm btn-success" style="pointer-events: none;color:white">Published</a>
                            @else
                            <a class="btn btn-sm btn-danger" style="pointer-events: none;color:white">Not Published</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('blogs.edit', [$blog->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                            <form class="float-left m-1" action="{{ route('blogs.destroy', [$blog->id]) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/app-light.css')}}">
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.css')}}">
@endpush
@push('script')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $('#table').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [4, 8, 16, -1],
            [4, 8, 16, "All"]
        ]
    });
</script>
@endpush