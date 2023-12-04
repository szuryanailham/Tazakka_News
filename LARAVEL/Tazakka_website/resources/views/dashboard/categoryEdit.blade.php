@extends('dashboard.index')
@section('main-dashboard')
<div class="col-lg-8">
    <form method="POST" action="/dashboard/category/{{$category->slug}}">
        @method('put')
        @csrf
          <div class="mb-3">
              <label for="title" class="form-label mb-3">Title Categories</label>
              <input value="{{ old('name',$category->name) }}" name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="title">
              @error('name')
              <div id="name " class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug Categories</label>
                <textarea name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" rows="3">{{ old('slug', $category->slug) }}</textarea>
                @error('slug')
                    <div id="slug" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Update</button>
      </form>
</div>
@endsection