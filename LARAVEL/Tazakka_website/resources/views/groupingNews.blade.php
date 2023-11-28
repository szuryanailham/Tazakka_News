@extends('layouts.header')
@section('container')
{{--  TAMPILAN AWAL  --}}
<div class="mb-4">
  <h1 class="text-center">{{ $title }}</h1>
  <p class="text-center">Selamat datang di halaman berita tentang sekolah kami</p>
</div>
<div class="row"> 
   {{-- berita Hero --}}
  <div class="card mb-3">
  <div style="background-color:rgba(0,0,0,0.7)" class="position-absolute  end-20 p-2 "><a class="text-white text-decoration-none" href="/categories">{{ $news[0]->category->name }}</a></div>
  <img src="https://source.unsplash.com/1600x500/?{{ $news[0]->category->name }}" class="card-img-top" alt="...">
  <div class="card-body">
    @if ($news[0]->category)
    <h5 class="card-title">{{$news[0]->title }}</h5>
    <span class="" style="font-size: 15px;">Author by <a class="text-decoration-none" href="/author/{{ $news[0]->author->username }}">{{ $news[0]->author->username }}</a></span>
    <p class="card-text">{{$news[0]->slug }}</p>
    <p class="card-text"><small class="text-body-secondary">{{ $news[0]->created_at->diffForHumans() }}</small></p>
    <a href="/detailNews/{{ $news[0]->slug }}" class="btn btn-outline-success btn-sm">See More</a>
    <a href="#" class="btn btn-outline-danger btn-sm"><i class="bi bi-heart"></i> Suka</a>
@endif
  </div>
</div> 
 {{-- akhir berita Gero --}}
 @foreach ($news->skip(1) as $item)
 @if ($item->category)
 <div class="col-lg-4  mb-3 d-flex justify-content-center">
    <div class="card mt-3" style="width: 22rem;">
      <div style="background-color:rgba(0,0,0,0.7)" class="position-absolute  end-20 p-2 "><a class="text-white text-decoration-none" href="/categories">{{ $item->category->name }}</a></div>
      <img src="https://source.unsplash.com/1600x900/?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
      <div class="card-body">
        <h5 class="card-title">{{ $item->title }}</h5>
        <span class="" style="font-size: 15px;">Author by <a class="text-decoration-none" href="/author/{{ $item->author->username }}">{{ $item->author->username }}</a></span>
        <p class="card-text">{{ $item->slug }}</p>
        <a href="/detailNews/{{ $item->slug }}" class="btn btn-outline-success btn-sm">See More</a>
        <a href="#" class="btn btn-outline-danger btn-sm"><i class="bi bi-heart"></i> Suka</a>
      </div>
    </div>
    </div>
@endif
  @endforeach
</div>
@endsection

   