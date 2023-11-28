@extends('layouts.header')
@section('container')
  {{-- membuat susunan grid --}}
<div class="container">
  @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
  <div class="row mb-2">
    <div class="col d-flex">
      <button type="button" class="btn btn-success" data-bs-toggle="button">Tranding now</button>
        <div class="typing-demo">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
        </div>
    </div>
    </div>
  </div>
  <div class="row">
    {{-- TOP TRANDING NEWS --}}
    <div class="col-lg-7">
      <div id="carouselTopNews" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          
          {{-- ITEM TOP TREND NEWS --}}
          @for ($i = 0; $i < 3; $i++)
          <a href="/detailNews/{{ $news[$i]->slug }}">
              <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                  @if ($news[$i]->image)
                      <img class="img-fluid" style="width:700px;max-height:350px;overflow:hidden" src="{{ asset('storage/'.$news[$i]->image) }}"  alt="{{ $news[$i]->title }}">
                  @else
                      <img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $news[$i]->category->name }}"  alt="{{ $news[$i]->category->name }}">
                  @endif
                  <div class="carousel-caption d-none d-md-block">
                      <h5>{{ $news[$i]->title }}</h5>
                      <p>{{ $news[$i]->slug }}</p>
                      <span class="badge text-bg-primary">{{ $news[$i]->category->name }}</span>
                  </div>
              </div>
          </a>
      @endfor
      
             {{-- AKHIR ITEM TOP TREND NEWS --}}
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTopNews" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTopNews" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="row mt-3">
        {{-- UNER TOP ELEMENT NEWS --}}
      <div class="col-lg-12 d-flex flex-wrap gap-2 justify-content-center">
        @for ($i = 3; $i < 6; $i++)
        <a href="/detailNews/{{ $news[$i]->slug }}">
          <div class="card populer_card">
            @if ($news[$i]->image)
            <img class="img-fluid" style="max-height:350px;overflow:hidden" src="{{ asset('storage/'.$news[$i]->image) }}"  alt="{{ $news[$i]->title }}">
            @else
            <img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $news[$i]->category->name }}"  alt="{{ $news[$i]->category->name }}">
            @endif
            <div class="card-body">
              {{-- category --}}
              <span class="badge text-bg-success">{{ $news[$i]->category->name }}</span>
              {{-- slug --}}
              <p style="word-wrap: break-word;" class="card-text">{{ $news[$i]->slug }}</p>
            </div>
          </div>
        </a>
        @endfor
      </div>
      </div>
      
      
      
      {{-- AKHIR UNDER TOP ELEMENT NEWS --}}
      </div>
  <div class="col-lg-5 mt-3">
    {{-- card satu --}}
    @for ($i = 6; $i <= 10; $i++)
    @if ($news[$i]->category)
    <a href="/detailNews/{{ $news[$i]->slug }}">
      <div class="card mb-3" style="max-width: 540px">
        <div class="row g-0">
          <div class="col-md-4">
            @if ($news[$i]->image)
              <img class="img-fluid" style="max-height:350px;overflow:hidden" src="{{ asset('storage/'.$news->image) }}"  alt="{{ $news[$i]->title }}">
              @else
              <img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $news[$i]->category->name }}"  alt="{{ $news[$i]->category->name }}">
              @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{ $news[$i]->title }}</h5>
              <span class="badge text-bg-success">{{ $news[$i]->category->name }}</span>
            </div>
          </div>
        </div>
      </div>
    </a>
   
@endif
   
    @endfor
    {{-- akhir card satu --}}
</div>
</div>
</div>

{{-- section 2 --}}
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleIndicators2" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                @for ($i = 10; $i <= 13; $i++)
                @if ($news[$i]->category)
                <div class="col-md-4 mb-3">
                  <div class="card">
                    @if ($news[$i]->image)
                    <img class="img-fluid" style="max-height:350px;overflow:hidden" src="{{ asset('storage/'.$news->image) }}"  alt="{{ $news[$i]->title }}">
                    @else
                    <img class="img-fluid" src="https://source.unsplash.com/1600x900/?{{ $news[$i]->category->name }}"  alt="{{ $news[$i]->category->name }}">
                    @endif
                    <div class="card-body">
                      <h4 class="card-title">Special title treatment</h4>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
            @endif
                @endfor
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



{{-- SECTION THREE  --}}
<div class="container">
  <div class="row h-50">
    <h3 class="mb-2 ">From Tazakka to World</h3>
    <div class="col-lg-6">
      <div class="ratio ratio" style="--bs-aspect-ratio: 50%; width:100%">
        <iframe src="https://www.youtube.com/embed/rLn6UIPq5EQ"  title="YouTube video" allowfullscreen></iframe>
      </div>
    </div>  
    <div class="col-lg-6">
      <h3>Tazakka Boarding School</h3>
      <article class="p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime explicabo ullam quas autem voluptate ducimus optio necessitatibus! Eum fuga sit nihil cupiditate dicta ratione omnis ullam minus maxime dolore eveniet, doloribus minima at vel odit, expedita debitis, corporis ea impedit </article>
      <article class="p-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime explicabo ullam quas autem voluptate ducimus optio necessitatibus! Eum fuga sit nihil cupiditate dicta </article>
      <div class="col-3">
        <div class=" social-media d-flex justify-content-evenly">
          {{-- membuat logo dan link akses social media --}}
            <a class="text-dark" href=""><i class="bi bi-instagram"></i></a>
            <a class="text-dark" href=""><i class="bi bi-facebook"></i></i></a>
            <a class="text-dark" href=""><i class="bi bi-twitter"></i></i></a>
          {{-- akhir dari logo social media --}}
          </div>
      </div>
    </div>
  </div>
</div>

{{-- END SECTION THREE --}}

{{-- SECTION EMPAT --}}
<section class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="carouselExampleIndicators2" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                @for ($i = 12; $i <= 16; $i++)
                @if ($news[$i]->category)
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img class="img-fluid" alt="100x280" src="https://source.unsplash.com/100x80/?{{ $news[$i]->category->name }}">
                    <div class="card-body">
                      <h4 class="card-title">{{ $news[$i]->title }}</h4>
                      <p class="card-text">{{ $news[$i]->slug }}</p>
                    </div>
                  </div>
                </div>
                @endif
                @endfor
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- AKHIR SECTION 4  --}}

{{-- SECTION LIMA --}}
<section class="container">
  <div class="row p-2">
   <div class="text-center mb-5">
    <h3>Daily santri Today</h3>
    <span >Lorem ipsum dolor, sit amet consectetur adipisicing.</span>
   </div>
    <div class="col-lg-7">
    <div class="row">
      {{-- box element --}}
      <div class="b-3" style="max-width: 95%;">
       
        <div class="row">
          @for ($i = 14; $i <= 17; $i++)
          @if ($news[$i]->category)
          <div class="card mb-3" style="max-width:100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img style="width: 100%" src="https://source.unsplash.com/500x500/?{{ $news[$i]->category->name }}" class="img-fluid rounded-start" alt="{{ $news[$i]->category->name }}">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        @endif
          @endfor
         
        </div>
      </div>
      {{-- akhir box element --}}
      {{-- box element --}}
      {{-- akhir box element --}}
    </div>
    </div>
    <div class="col-lg-5 mr-4">
      <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
              Mahfudzot of today #1
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
            <div class="accordion-body">
              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              Mahfudzot of today #2
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
            <div class="accordion-body">
              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
              Mahfudzot of today #3
            </button>
          </h2>
          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
            <div class="accordion-body">
              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
