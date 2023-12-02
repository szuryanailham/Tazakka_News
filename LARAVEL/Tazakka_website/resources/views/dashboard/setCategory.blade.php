@extends('dashboard.index')
@section('main-dashboard')
<div class="col-lg-10">
    <h1 class="mb-3">Add Categories</h1>
    @if (session()->has('success'))
    <div class="row">
      <div class="col-lg-10">
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
      </div>
    </div>
  @endif
    <form method="POST" action="/dashboard/category">
      @csrf
        <div class="mb-3">
            <label for="title" class="form-label mb-3">Title Categories</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="title">
            @error('name')
            <div id="name " class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug Categories</label>
            <textarea name="slug" class="form-control @error('slug') is-invalid @enderror " id="slug" rows="3"></textarea>
            @error('slug')
            <div id="slug" class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
    </form>

    {{-- SHOW ALL CATEGORIES AND ALL ACTION --}}
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Slug</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($category as $item)
       <tr>
        <th scope="row">1</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->slug }}</td>
        <td class="d-flex gap-1">
          {{-- FITURE DELETE --}}
         <form action="/dashboard/category/{{ $item->slug}}" method="POST">
          @method('delete')
          @csrf
          <button type="submit" onclick="return('are you sure ?')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
         </form>
         {{-- FITURE UPDATE --}}
         <a class="btn btn-warning" href="/dashboard/category/{{ $item->slug}}/edit"><i class="bi bi-pencil-square"></i></a>
        </td>
      </tr>
       @endforeach
      </tbody>
    </table>
</div>
@endsection