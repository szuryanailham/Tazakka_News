@extends('dashboard.index')
@section('main-dashboard')
{{-- FORM MAKE NEWS --}}
<div class="row">
    <div class="col-lg-8">
        <form method="POST" action="/dashboard/news/{{$news->slug}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            {{-- news title input --}}
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input value="{{ old('title',$news->title) }}"  name="title" type="text" class="form-control @error('title')is-invalid @enderror" id="title">
              @error('title')
              <div id="name " class="invalid-feedback">
                 {{ $message }}
                </div>
              @enderror
            </div>
            {{-- news slug input --}}
            <div class="mb-3">
                <label for="newSlug" class="form-label">Slug</label>
                <input  value="{{ old('slug',$news->slug) }}" name="slug" type="text" class="form-control" id="slug" readonly>
              </div>
              {{-- select input --}}
              <div class="mb-3">
                <label for="category">Category</label>
                <select id="category" class="form-select" name="category_id">
                   @foreach ($category as $item)
                   @if (old('category_id')== $item->id ){
                  <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                   }   
                   @endif
                   <option value="{{ $item->id }}">{{ $item->name }}</option>
                   @endforeach
                  </select> 
              </div>
              {{-- aploud image  --}}
              @if ($news->image)
              <img src="{{ asset('storage/'.$news->image) }}" class="img-preview col-sm-5 mb-3 d-block" alt="Image Preview">
          @else
              <img  src="https://source.unsplash.com/random/300x300" class="img-preview col-sm-5 mb-3" alt="Image Preview">
          @endif
              <div class="mb-3">
                <label for="image" class="form-label inline-block">Image Upload</label>
                <input  onchange="previewImage(event)" name="image" class="form-control @error('image') is-invalid @enderror" type="file" id="image">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
              {{-- content of News  --}}
              <div class="mb-3">
                <label for="content" class="form-label">content</label>
                @error('content')
                <p class="text-danger">{{ $message }}</p>
                @enderror 
                <input  value="{{ old('body',$news->body) }}"  id="content" type="hidden" name="body">
                <trix-editor input="content"></trix-editor>
               </div>
            {{-- button submit --}}
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
{{-- javascript untuk memanggil slug  --}}
 <script>
    const title = document.querySelector('#title')
    const slug = document.querySelector('#slug')
    title.addEventListener('change',()=>{
        fetch('/dashboard/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

// {{--END FORM MAKE NEWS --}}
    const previewImage = (event)=>{
      const image = document.querySelector('.img-preview');
      console.log(image)
      image.style.display = 'block'
      image.src = URL.createObjectURL(event.target.files[0]);
      image.onload = function() {
      URL.revokeObjectURL(image.src) // free memory
    }
    }
// {{-- SHOW APLOUDED IMAGE --}}
</script>
@endsection