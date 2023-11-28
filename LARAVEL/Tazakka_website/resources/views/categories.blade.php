@extends('layouts.header')
@section('container')
<div class="row">
    @foreach ($categories as $category)
    <div class="col-md-4 mb-3">
        <div class="card">
           <a style="color: white" href="/news/{{ $category->slug }}">
             <img src="https://source.unsplash.com/1600x900/?{{ $category->name }}" class="card-img-top" alt="...">
             <div class="card-img-overlay d-flex align-items-center p-0 ">
                <h5 style="background-color:rgba(0,0,0,0.7)" class="card-title text-center flex-fill p-4 fs-3">{{ $category->name }}</h5>
              </div>
           </a>
        </div>
    </div>
    @endforeach
</div>
@endsection
