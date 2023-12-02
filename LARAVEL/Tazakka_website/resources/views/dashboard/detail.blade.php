@extends('dashboard.index')
@section('main-dashboard')
<div class="row p-2">
    @if (auth()->user()->id == $news->user_id || auth()->user()->can('admin'))
    <div class="col-lg-8 offset-lg-2 mb-2 d-flex">
        <a href="/dashboard/news/addNews" data-toggle="tooltip" title="edit" class="btn btn-outline-success"><i class="bi bi-pencil-square"></i>Create</a>
        <a href="/dashboard/news/{{$news->slug}}/edit" data-toggle="tooltip" title="edit" class="btn btn-outline-warning"><i class="bi bi-pencil-square"></i> Update</a>
        <form method="POST" action="/dashboard/news/{{$news->slug}}">
            @method('delete')
            @csrf
            <button type="submit" onclick="return confirm('are you sure ?')"  data-toggle="tooltip" title="delete" class="btn btn-outline-danger"><i class="bi bi-trash"></i> Delete</button>
          </form>
    </div>  
    @endif
    <div class="col-lg-8 offset-lg-2">
{{-- image berita --}}
@if ($news->image)
<img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/'.$news->image) }}"  alt="{{ $news->category->name }}">
@else
<img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $news->category->name }}"  alt="{{ $news->category->name }}">
@endif
{{-- judul --}}
<h1>{{ $news->title }}</h1>
{{-- penulis dan tanggal publish --}}
<span class="" style="font-size: 15px;">Author by <a class="text-decoration-none" href="#">{{ $news->author->name }}</a></span>
{{-- text body --}}
 
<article class="my-3 fs-6">
    {!! $news->body !!}
   </article>
    {{-- button kembali --}}
    </div>
 </div>
@endsection