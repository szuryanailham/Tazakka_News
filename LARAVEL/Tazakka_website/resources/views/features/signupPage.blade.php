@extends('layouts.header')
@section('container')
    <div class="row">
        {{-- IMAGE --}}
        <div class="col-lg-5">
            <img width="600px" height="750px" src="https://source.unsplash.com/user/wsanter" class="img-fluid" alt="...">
        </div>
        {{-- AKHIR IMAGE --}}
        
        {{-- FORM --}}
        <div class="col-lg-7 m-auto">
            <form method="POST" class="border p-3">
                @csrf
              <div class="lh-1 mb-4 text-center">
              <h3 class="fw-semibold lh-sm">Form Sign Up</h3>
              <span>Sign up and become our Author</span>
              </div>
                {{-- NAMA LENGKAP --}}
                <div class="mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <input  autofocus  type="text"  value="{{ old('name') }}" name="name" class="form-control @error('name') is-invalid  @enderror" id="nama_lengkap" aria-describedby="emailHelp">
                    @error('name')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                       {{ $message }}
                      </div>
                    @enderror
                </div>
                {{-- AKHIR NAMA LENGKAP --}}

                {{-- USERNAME --}}
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" value="{{ old('username') }}"  name="username" class="form-control @error('username') is-invalid  @enderror" id="username" aria-describedby="emailHelp">
                    @error('username')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                       {{ $message  }}
                      </div>
                    @enderror
                </div>
                {{-- USERNAME --}}

                {{-- EMAIL --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email"  value="{{ old('email') }}"  @error('Email') is-invalid  @enderror type="email" class="form-control @error('email') is-invalid  @enderror" id="email">
                    @error('email')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                       {{ $message }}
                      </div>
                    @enderror
                </div>
                {{-- AKHIR EMAIL --}}

                {{-- PASSWORD --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" @error('password') is-invalid  @enderror type="password" class="form-control @error('password') is-invalid  @enderror" id="password">
                    @error('password')
                    <div id="validationServer04Feedback" class="invalid-feedback">
                       {{ $message }}
                      </div>
                    @enderror
                </div>
                {{-- AKHIR PASSWORD --}}

                {{-- VERIFIKASI PASSWORD --}}
                {{-- ???? --}}
                {{-- AKHIR VERIFIKASI PASSWORD --}}
                <button type="submit" class="btn btn-success">SIgn Up</button>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary">
                  <a class="text-white text-decoration-none" href="/login">Login</a>
                </button>
            </form>
</div>
@endsection

   