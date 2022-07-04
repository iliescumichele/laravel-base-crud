@extends('layouts.main')

@section('content')
    <div class="container ">
        <div class="link my-4">
            <a class="" style=" color: black; " href="{{route('comics.index')}}"><< Back to previous page</a>
        </div>
        
        <div class=" py-5 ">
            <div class="row row-cols-2 d-flex justify-content-center align-items-center ">
                <div class="col d-flex justify-content-center">
                    <img src="{{$comic->image}}" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <h5>Title: {{ $comic->title}}</h5>
                    <h6>Type: {{ $comic->type}}</h6>
                </div>
            </div>
        </div>
        
        <a class="btn btn-primary " href="#">Edit</a>


    </div>
@endsection