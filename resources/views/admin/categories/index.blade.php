@extends('layouts.admin')
@section('title', 'Categories')
@section('content')
<div class="content">
    <a href="{{route('categories.create')}}" class="btn btn-success" style="background: rgb(28, 184, 65);margin-bottom: 12px;margin-top: 12px;text-decoration:none">Insert</a>

    <div class="pure-g">
        <div class="pure-u-1">
            <table class="table datatables" id="table" style="width: 100%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Created at</th>
                        <th>Updated at</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr class="pure-table-odd">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('categories.edit', [$category->id]) }}" class="btn btn-warning float-left m-1">Edit</a>
                            <form class="float-left m-1" action="{{ route('categories.destroy', [$category->id]) }}" method="POST">
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
<link rel="stylesheet" href="{{secure_asset('css/app-light.css')}}">
<link rel="stylesheet" href="{{secure_asset('css/dataTables.bootstrap4.css')}}">
@endpush
@push('script')
<script src="{{secure_asset('js/jquery.min.js')}}"></script>
<script src="{{secure_asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{secure_asset('js/dataTables.bootstrap4.min.js')}}"></script>
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