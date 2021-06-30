@extends('layouts.admin')
@section('title', 'Profile')
@section('content')
<div class="content">
    <h2 class="content-subhead"></h2>


    <div class="pure-g">
        <div class="pure-u-1" style="text-align: center">
            <img class="pure-img-responsive" src="http://farm3.staticflickr.com/2875/9069037713_1752f5daeb.jpg" alt="Peyto Lake" style="width: 10%;height: auto;border-radius: 50%">
        </div>
        <div class="pure-u-1" style="text-align: center">
            <h4>Anonymous User</h4>
        </div>
        <div class="pure-u-1" style="text-align: center">
            <a href="#" class="pure-button" style="background: rgb(202, 60, 60);">Log out</a>
        </div>
    </div>
</div>
@endsection