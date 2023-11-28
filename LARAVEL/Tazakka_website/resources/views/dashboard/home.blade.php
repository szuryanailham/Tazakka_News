@extends('dashboard.index')
@section('main-dashboard')
{{-- menampilkan seluruh berita yang ada di web --}}
@if (session()->has('success'))
  <div class="row">
    <div class="col-lg-8">
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    </div>
  </div>
@endif
<table class="table p-3">
  <h1 class="mb-3">{{ $title }}</h1>
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">judul</th>
        <th scope="col">author</th>
        <th scope="col">category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      {{-- ALL NEWS SECTION --}}
      @foreach ($news as $item)
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $item->title }}</td>
        
        {{-- Kolom Author --}}
        <td>{{ $item->author ? $item->author->username : '-' }}</td>
        
        {{-- Kolom Category --}}
        <td>{{ $item->category ? $item->category->name : '-' }}</td>
        
        <td>
            <a href="/dashboard/news/{{ $item->slug }}" class="btn btn-success"><i class="bi bi-file-text"></i></a>
        </td>
    </tr>
@endforeach

       {{--END  ALL NEWS SECTION --}}
    </tbody>
  </table>
@endsection