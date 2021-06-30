@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="content">
    <h2 class="content-subhead"></h2>

    <div class="pure-g">
        <div class="pure-u-1-3" style="background-color: #f38181">
            <h4 style="text-align: center;color: white">{{ count($authors) }}</h4>
            <h4 style="text-align: center;color: white">Authors</h4>
        </div>
        <div class="pure-u-1-3" style="background-color: #fce38a">
            <h4 style="text-align: center;color: white">{{ count($blogs) }}</h4>
            <h4 style="text-align: center;color: white">Blogs</h4>
        </div>
        <div class="pure-u-1-3" style="background-color: #95e1d3">
            <h4 style="text-align: center;color: white">{{ count($categories) }}</h4>
            <h4 style="text-align: center;color: white">Categories</h4>
        </div>
    </div>
</div>
@endsection