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
  <div class="col-lg-8">
    <button type="button" class="btn btn-success mb-2 button_save">Save Change</button>
</div>
    <thead>
      <form action="/dashboard/validated" method="POST" id="statusForm">
        @csrf
        <table class="table p-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">judul</th>
                    <th scope="col">action</th>
                    <th scope="col">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->title }}</td>
                        <td class="d-flex">
                            <a href="/dashboard/news/{{ $item->slug }}" class="btn btn-success"><i class="bi bi-file-text"></i></a>
                        </td>
                        <td>
                            <div class="form-check">
                                <input name="ids[]" value="{{ $item->id }}" class="checkBox form-check-input" id="checkBox_{{ $item->id }}" type="checkbox">
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </form>
@endsection
