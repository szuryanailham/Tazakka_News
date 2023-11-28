@extends('dashboard.index')
@section('main-dashboard')
{{-- menampilkan seluruh berita yang ada di web --}}
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
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->title}}</td>
        {{-- cek apakah author ada atau tidak --}}
        @if ($item->author)
        <td> {{$item->author->username}}</td>
            @else
            <th scope="row">-</th>
            @endif
        {{-- cek apakah ada category  --}}
        @if ($item->category)
        <td> {{$item->category->name}}</td>
            @else
            <th scope="row">-</th>
            @endif
        <td>
            <a href="/dashboard/news/{{ $item->slug }}" data-toggle="tooltip" title="read" class="btn btn-success"><i class="bi bi-file-text"></i></a>
            {{-- button edit --}}
            <a href="/dashboard/news/{{ $item->slug }}/edit" data-toggle="tooltip" title="edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
            {{-- button delete --}}
            <form method="POST" class="d-inline" action="/dashboard/news/{{ $item->slug}}">
              @method('delete')
              @csrf
              <button type="submit" onclick="return confirm('are you sure ?')"  data-toggle="tooltip" title="delete" class="btn btn-danger"><i class="bi bi-trash"></i></button>
            </form>
        </td>
      </tr>
      @endforeach
       {{--END  ALL NEWS SECTION --}}
    </tbody>
  </table>
@endsection