<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Tailwinds CSS  --}}
    <title>Home - Cahaya Waskitha</title>
    {{-- css live render from tailwinds --}}
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body>
    {{-- Include from partials.navbar  --}}
    @include('partials.navbar')
    {{-- Yeild container  --}}
    <div class="container mt-4">
        @yield('container')
    </div>
    @include('partials.footer')
    {{-- Include from partials.footer--}}
</body>
<script>
    $('.navbar-button').on('click',()=>{
        console.log('sip')
    })
</script>
</html>