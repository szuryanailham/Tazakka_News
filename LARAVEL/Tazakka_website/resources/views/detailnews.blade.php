@extends('layouts.header')
@section('container')
 <div class="row">
    <div class="col-lg-8 offset-lg-2">
{{-- image berita --}}
<div style="background-color:rgba(0,0,0,0.7)" class="position-absolute  end-20 p-2 "><a class="text-white text-decoration-none" href="/categories">{{ $news->category->name }}</a></div>
@if ($news->image)
<img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/'.$news->image) }}"  alt="{{ $news->category->name }}">
@else
<img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $news->category->name }}"  alt="{{ $news->category->name }}">
@endif
  
{{-- judul --}}
<h1>{{ $news->title }}</h1>
{{-- penulis dan tanggal publish --}}
<span class="" style="font-size: 15px;">Author by <a class="text-decoration-none" href="/author/{{ $news->author->username }}">{{ $news->author->name }}</a></span>
{{-- text body --}}
 
<article class="my-3 fs-6">
    {!! $news->body !!}
   </article>
    {{-- button kembali --}}
    <div class="d-flex justify-content-center my-2 ml-3">
        <button class="btn btn-success" type="submit"><a style="color: white" class="text-decoration-none" href="/news">Come back</a></button>
    </div>
    </div>
 </div>
  
@endsection